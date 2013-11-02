<?php 

namespace Facades;

/**
* File class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Cache extends Facade
{	
	public static function getFacadeAccessor()
	{
		return 'cache';
	}
}