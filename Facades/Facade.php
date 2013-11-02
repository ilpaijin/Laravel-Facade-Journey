<?php

namespace Facades;

/**
* Facade class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Facade 
{
	/**
	 * [$app description]
	 * @var [type]
	 */
	protected static $app;

	/**
	 * [setFacadeApp description]
	 * @param [type] $app [description]
	 */
	public static function setFacadeApp($app)
	{
		static::$app = $app;
	}

	/**
	 * [resolveFacade description]
	 * @param  [type] $accessor [description]
	 * @return [type]           [description]
	 */
	public static function resolveFacade($accessor)
	{
		return static::$app[$accessor];
	}

	/**
	 * [__callStatic description]
	 * @param  [type] $method [description]
	 * @param  [type] $args   [description]
	 * @return [type]         [description]
	 */
	public static function __callStatic($method, $args)
	{
		$instance = static::resolveFacade(static::getFacadeAccessor());

		switch (count($args))
		{
			case 1:
				return $instance->$method($args[0]);
				break;
			case 2:
				return $instance->$method($args[0], $args[1]);
				break;
			default: 
				return call_user_func_array( array($instance, $method), $args);			
		}
	}
}