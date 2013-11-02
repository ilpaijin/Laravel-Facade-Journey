<?php

namespace Cache;

/**
* RedisStore class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class RedisStore //interfaces
{
	/**
	 * [get description]
	 * @param  [type] $resource [description]
	 * @return [type]           [description]
	 */
	public function get($resource)
	{
		echo "<h3>RedisStore cache: return some data from $resource</h3>";
	}

	/**
	 * [put description]
	 * @param  [type] $data     [description]
	 * @param  [type] $resource [description]
	 * @return [type]           [description]
	 */
	public function put($data, $resource)
	{ 
		echo "<h3>RedisStore cache: inserted '$data' into $resource</h3>" ;
	}
}