<?php

if(!function_exists('view')):
	function view($file_path){
		$path = str_replace("\\",DIRECTORY_SEPARATOR,$file_path);

		$path = str_replace('.',DIRECTORY_SEPARATOR,$path);

		$file = APP_ROOT.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.$path.'.tpl';
		
		if(file_exists($file)){
			return require $file;
		}
		dd($path.' '.'view page doesn'.'"t'.' exist');
	}
endif;

if(!function_exists('redirect')):
	function redirect($url){
		header("Location: $url");
		exit();
	}
endif;

if(!function_exists('pageAdd')):
	function pageAdd($file_path){
		include(APP_ROOT.'/view/'.$file_path);
	}
endif;

if(!function_exists('dd')):
	function dd($data){
		// echo "<body style='background:black;'>";
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		// echo "</body>";
	}
endif;

// create name route function
function name($routeName){
	echo $routeName;
}
