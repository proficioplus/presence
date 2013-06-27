<?php

	// Define the core paths
	// Define them as absolute paths to make sure that require_once works as expected
	
	// DIRECTORY_SEPARATOR is a PHP pre-defined constant
	// (\ for Windows, / for Unix)
	
	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
	
	defined('SITE_ROOT') ? null : define('SITE_ROOT', 'www.proficioplus.com'.DS.'presence');
	
	defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');
	
	// load config file first
	require_once('config.php');
	
	// load basic functions next so that everything after can use them
	require_once('functions.php');
	// load core objects
	require_once('session.php');
	require_once('database.php');
	
	// load database-related classes
	require_once('file.php');
	require_once('settings.php');
	require_once('user.php');
	
?>