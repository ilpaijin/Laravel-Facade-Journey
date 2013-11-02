<?php

/**
* App class
*
* @package default
* @author ilpaijin <ilpaijin@gmail.com>
*/
class App implements \ArrayAccess
{
	protected $bindings = array();
	/**
	 * [offsetExists description]
	 * @param  [type] $offset [description]
	 * @return [type]         [description]
	 */
	public function offsetExists($key)
	{
		# code...
	}

	/**
	 * [offsetGet description]
	 * @param  [type] $offset [description]
	 * @return [type]         [description]
	 */
	public function offsetGet($key)
	{
		return  $this->bindings[$key];
	}

	/**
	 * [offsetSet description]
	 * @param  [type] $offset [description]
	 * @param  [type] $value  [description]
	 * @return [type]         [description]
	 */
	public function offsetSet($key, $value)
	{
		$this->bindings[$key] = $value;
	}

	/**
	 * [offsetUnset description]
	 * @param  [type] $offset [description]
	 * @return [type]         [description]
	 */
	public function offsetUnset($key)
	{
		# code...
	}

}