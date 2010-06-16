<?php defined('_JEXEC') or die;

(JFactory::getApplication()->triggerEvent('InitializeKoJo', JPATH_COMPONENT)) or die('Please install or enable the KoJo Framework Plugin');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('default', '<action>(/<task>)(/<id>)(:<ordering>(:<table>))', array(
		'action' => '[a-zA-Z]*',
		'task' => 'add|edit|delete|save|apply|cancel',
		'ordering' => 'asc|desc',
		'table' => '[a-zA-Z]*',
	))
	->defaults(array(
		'controller' => 'library',
		'action'     => 'books',
	));
	
/*
 * Follow Joomla's standard, use the "view" $_GET variable as the route. 
 *		This is to allow Joomla to create Menu Items in the admin section that points 
 *		to different controllers of the Kojo Application.
*/

$route = JRequest::getVar('route', JRequest::getVar('view', 'books'));

// If there is a $_POST, try to translate the post values into a route.
if ($_POST) 
{
	$route = Route::get('default')->uri($_POST);
}

/**
 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
 * If no source is specified, the URI will be automatically detected.
 */
echo Request::factory($route)
	->execute()
	->response;

JFactory::getApplication()->triggerEvent('ExitKojo', JPATH_COMPONENT_SITE);