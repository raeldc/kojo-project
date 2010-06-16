<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Handles long strings
 *
 * @package  Jelly
 */
class Field_JSON extends Jelly_Field
{
	
	public function get($model, $value)
	{
		return new Format_JSON($value);
	}
	
	public function save($model, $value, $loaded)
	{	
		$value = new Format_JSON($value);
		return $value->render();
	}
}

class Format_JSON
{
	protected $_value;
	
	public function __construct($value)
	{
		if (is_object($value)) 
		{
			$this->_value = $value;
		}
		
		if (is_string($value) AND (substr($value, 0, 1) != '{') AND (substr($value, -1, 1) != '}'))
		{
			JError::raiseWarning(100, JText::_('Unrecognized Format'));
			return FALSE;
		}

		$this->_value = json_decode($value);
	}
	
	public function render()
	{
		return json_encode($this->_value);
	}
	
	public function __toString()
	{
		return $this->render();
	}

	public function __get($name)
	{
		if (isset($this->_value->$name)) 
		{
			return $this->_value->$name;
		}
		
		return NULL;
	}
	
	public function __set($name, $value = '')
	{
		$this->_value->$name = $value;
	}
}
