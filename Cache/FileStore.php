<?php

namespace Cache;

/**
* FileStore class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class FileStore //interfaces
{
	/**
	 * [get description]
	 * @param  [type] $resource [description]
	 * @return [type]           [description]
	 */
	public function get($resource)
	{
		echo "<h3>FileStore cache: return some data from $resource</h3>";
	}

	/**
	 * [put description]
	 * @param  [type] $data     [description]
	 * @param  [type] $resource [description]
	 * @return [type]           [description]
	 */
	public function put($data, $resource)
	{ 
		echo "<h3>FileStore cache: inserted '$data' into $resource</h3>" ;
	}
}