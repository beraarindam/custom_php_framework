<?php
namespace App\Controllers;
use App\Controllers\BaseController;


class HomeController extends BaseController{
	public function index(){
		view('index');
	}

	public function about_us(){
		view('about-us');
	}
}