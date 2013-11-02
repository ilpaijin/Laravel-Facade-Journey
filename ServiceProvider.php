<?php

/**
* ServiceProvider class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
abstract class ServiceProvider 
{	
	/**
	 * [$app description]
	 * @var [type]
	 */
	protected $app;

	/**
	 * [__construct description]
	 * @param [type] $app [description]
	 */
	public function __construct($app)
	{
		$this->app = $app;
	}

	/**
	 * [register description]
	 * @return [type] [description]
	 */
	abstract public function register();
}