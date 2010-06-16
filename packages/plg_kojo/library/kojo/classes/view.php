<?php defined('SYSPATH') or die('No direct script access.');

class View extends Kohana_View
{
	public function __construct($file = NULL, array $data = NULL)
	{
		parent::__construct($file, $data);
	}
}
