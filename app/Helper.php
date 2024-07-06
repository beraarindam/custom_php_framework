<?php

if(!function_exists('view')):
	function view($file_path){
		$path = str_replace("\\",DIRECTORY_SEPARATOR,$file_path);

		$path = str_replace('.',DIRECTORY_SEPARATOR,$path);

		$file = APP_ROOT.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.$path.'.php';
		
		if(file_exists($file)){
			return require $file;
		}

		dd('<h1 style="color:red;">'.$path.' '.'view do not exist</h1>');
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
		include(APP_ROOT.'/pages/'.$file_path);
	}
endif;

if(!function_exists('dd')):
	function dd($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
endif;
