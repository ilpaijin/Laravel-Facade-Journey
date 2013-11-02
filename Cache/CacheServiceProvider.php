<?php 

namespace Cache;

/**
* File class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class CacheServiceProvider extends \ServiceProvider
{
	/**
	 * [$driver description]
	 * @var [type]
	 */
	protected $driver;

	public function __construct($app)
	{
		parent::__construct($app);
		$this->register();
	}
	/**
	 * [setDriver description]
	 * @param [type] $driver [description]
	 */
	public function setDriver($driver)
	{
		$this->driver = $driver;
		$this->register();
	}

	/**
	 * [getDriver description]
	 * @return [type] [description]
	 */
	public function getDriver()
	{
		return $this->driver = !empty($this->driver) ? $this->driver : new FileStore();
	}

	/**
	 * [register description]
	 * @return [type] [description]
	 */
	public function register()
	{
		$this->app['cache'] = $this->getDriver();
	}
}