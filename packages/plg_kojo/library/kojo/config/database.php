<?php defined('SYSPATH') or die('No direct access allowed.');

$config = JFactory::getConfig();

return array
(
	'default' => array
	(
		'type'       => $config->getValue('config.dbtype'),
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname
			 * string   username
			 * string   password
			 * boolean  persistent
			 * string   database
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => $config->getValue('config.host'),
			'username'   => $config->getValue('config.user'),
			'password'   => $config->getValue('config.password'),
			'persistent' => FALSE,
			'database'   => $config->getValue('config.db'),
		),
		'table_prefix' => $config->getValue('config.dbprefix'),
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	)
);