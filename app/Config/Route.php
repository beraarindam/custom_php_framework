<?php
namespace App\Config;

class Route{
	private static $routes = [];
	private static $controllerNamespace = 'App\Controllers\\';

	public static function add($uri, $controller,$action, $method='GET',$middleware=[],$name=null)
	{
		self::$routes[] = [
			'method'		=> $method,
			'uri'			=> $uri,
			'controller'	=> $controller,
			'action'		=> $action,
			'middleware'	=> $middleware,
			'name'		=> $name
		];
	}

	// GET Request
	public static function get($uri, $controller,$action,$middleware=[],$name=null){
		self::add($uri,$controller,$action,'GET',$middleware);
	}

	//POST Request
	public static function post($uri, $controller,$action,$middleware=[],$name=null){
		self::add($uri,$controller,$action,'POST',$middleware,$name);
	}

	//PUT Request
	public static function put($uri, $controller,$action,$middleware=[],$name=null){
		self::add($uri,$controller,$action,'PUT',$middleware,$name);
	}

	//PATCH Request
	public static function patch($uri, $controller,$action,$middleware=[],$name=null){
		self::add($uri,$controller,$action,'PATCH',$middleware,$name);
	}

	public static function handle(){
		$requestURI = $_SERVER['REQUEST_URI'];
		$requestMethod = $_SERVER['REQUEST_METHOD'];
		
		foreach(self::$routes as $route):
	
			if('/'.$route['uri'] === $requestURI && $route['method'] == $requestMethod):

				$controllerClass = self::$controllerNamespace.$route['controller'];
				$action = $route['action'];

				if ($route['name']) {
            		$name = $route['name'];
        		}

				$controller = new $controllerClass();
				$controller->$action();
				return;
			endif;
		endforeach;
		dd("404 Page Not Found!");
	}



}