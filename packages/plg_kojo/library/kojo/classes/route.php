<?php defined('SYSPATH') or die('No direct script access.');

class Route extends Kohana_Route {
	
	public static function anchor($name = 'default', $params = NULL, $title = NULL, $attributes = NULL, $protocol = NULL)
	{
		$url = Route::get($name)->uri($params);
		return HTML::anchor($url, $title, $attributes, $protocol);
	}
}
