<?php
namespace App\Controllers;
use App\Controllers\BaseController;


class HomeController extends BaseController{
	public function index(){
		$data = [
			'title'	=> 'Home'
		];
		$this->render('auth/login',$data);
	}

	public function about_us(){
		$data = [
			'title'	=>'About us'
		];
		$this->render('about-us',$data);
	}
}