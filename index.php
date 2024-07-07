<?php
define('APP_ROOT', __dir__);

require_once (APP_ROOT. '/vendor/autoload.php');

// Load env file
require_once (APP_ROOT.'/app/Config/DotEnv.php');
$dotenv = new Dotenv(__DIR__ . '/.env');
$dotenv->load();

// autoloader for namespaced classes
spl_autoload_register(function($class){

	$classFile = str_replace("\\", DIRECTORY_SEPARATOR, $class.'.php');

	$classPath = APP_ROOT.'/app/'.$classFile;

	if(file_exists($classPath)){
		require_once($classPath);
	}
});

session_start();

use App\Config\Route;
$route = new Route();

require_once(APP_ROOT.'/routes/web.php');

$route->handle();
