<?php defined('SYSPATH') or die('No direct script access.');

class Controller extends Kohana_Controller {
	
	public $params;
	
	public function before()
	{
		parent::before();
		
		if (JFactory::getApplication()->isSite()) 
		{
			$this->params = JComponentHelper::getParams(JRequest::getVar('option'));
			$this->params->merge(JFactory::getApplication()->getParams());
		}
		
		if ( ! defined('KOJO_VIEW_GLOBALS')) 
		{
			View::bind_global('params', $this->params);
			define('KOJO_VIEW_GLOBALS', TRUE);
		}
	}
}