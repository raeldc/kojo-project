<?php defined('JPATH_BASE') or die();

/**
 * Kojo System plugin
 */
class plgSystemKojo extends JPlugin
{	
	public function InitializeKoJo($apppath = FALSE)
	{
		if (defined('KOJO_INITIALIZED')) 
		{
			return;
		}
		
		if ( ! $apppath) 
		{
			$application = (JFactory::getApplication()->isAdmin()) ? JPATH_COMPONENT_ADMIN : JPATH_COMPONENT_SITE;
		}else
		{
			$application = $apppath;
		}
		
		$modules = JPATH_PLUGINS.DS.'system'.DS.'kojo'.DS.'library';
		$system = JPATH_PLUGINS.DS.'system'.DS.'kojo'.DS.'kohana';

		/**
		 * The default extension of resource files. If you change this, all resources
		 * must be renamed to use the new extension.
		 *
		 * @see  http://kohanaframework.org/guide/about.install#ext
		 */
		define('EXT', '.php');

		// Set the full path to the docroot
		define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

		// Make the application relative to the docroot
		if ( ! is_dir($application) AND is_dir(DOCROOT.$application))
			$application = DOCROOT.$application;

		// Make the modules relative to the docroot
		if ( ! is_dir($modules) AND is_dir(DOCROOT.$modules))
			$modules = DOCROOT.$modules;

		// Make the system relative to the docroot
		if ( ! is_dir($system) AND is_dir(DOCROOT.$system))
			$system = DOCROOT.$system;

		// Define the absolute paths for configured directories
		define('APPPATH', realpath($application).DIRECTORY_SEPARATOR);
		define('MODPATH', realpath($modules).DIRECTORY_SEPARATOR);
		define('SYSPATH', realpath($system).DIRECTORY_SEPARATOR);

		// Clean up the configuration vars
		unset($application, $modules, $system);

		// Load the base, low-level functions
		require SYSPATH.'base'.EXT;

		// Load the core Kohana class
		require SYSPATH.'classes/kohana/core'.EXT;

		if (is_file(APPPATH.'classes/kohana'.EXT))
		{
			// Application extends the core
			require APPPATH.'classes/kohana'.EXT;
		}
		else
		{
			// Load empty core extension
			require SYSPATH.'classes/kohana'.EXT;
		}

		/**
		 * Set the default time zone.
		 *
		 * @see  http://kohanaframework.org/guide/using.configuration
		 * @see  http://php.net/timezones
		 */
		date_default_timezone_set('America/Chicago');

		/**
		 * Set the default locale.
		 *
		 * @see  http://kohanaframework.org/guide/using.configuration
		 * @see  http://php.net/setlocale
		 */
		setlocale(LC_ALL, 'en_US.utf-8');

		/**
		 * Enable the Kohana auto-loader.
		 *
		 * @see  http://kohanaframework.org/guide/using.autoloading
		 * @see  http://php.net/spl_autoload_register
		 */
		spl_autoload_register(array('Kohana', 'auto_load'));

		/**
		 * Enable the Kohana auto-loader for unserialization.
		 *
		 * @see  http://php.net/spl_autoload_call
		 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
		 */
		ini_set('unserialize_callback_func', 'spl_autoload_call');

		Kohana::init(array(
			'base_url' => str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']), 
			'index_file' => 'index.php',
			'cache_dir' => JPATH_SITE.DS.'cache', 
		));
		Kohana::$log->attach(new Kohana_Log_File(JFactory::getConfig()->getValue('log_path')));
		Kohana::$config->attach(new Kohana_Config_File);
		
		/**
		 * Enable modules. Modules are referenced by a relative or absolute path.
		 */
		Kohana::modules(array(
			'kojo' => MODPATH.'kojo', 				// Overrides some of the Kohana Core classes to allow integration with Joomla
			'cache'      => MODPATH.'cache',     // Caching with multiple backends
			'database'   => MODPATH.'database',  	// Database access
			'pagination' => MODPATH.'pagination', 	// Paging of results
			'jelly' => MODPATH.'jelly', 			// The best ORM out there
		));
		
		define('KOJO_INITIALIZED', TRUE);
		
	}
	
	public function ExitKojo()
	{
		if (defined('KOJO_INITIALIZED')) 
		{
			Kohana::deinit();
		}
	}
}