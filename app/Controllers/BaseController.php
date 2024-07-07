<?php

namespace App\Controllers;

use App\Template;

class BaseController{
	protected $template;

	public function __construct() {
	    $this->template = new Template();
	}

	protected function render($templateFile, $data = []) {
	    echo $this->template->render($templateFile, $data);
	}
}


?>