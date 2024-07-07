<?php

namespace App;

require_once __DIR__ . '/../vendor/autoload.php'; // Adjust the path as necessary

use Smarty\Smarty;

class Template {
    protected $smarty;

    public function __construct() {
        $this->smarty = new Smarty();

        // Set Smarty directories
        $this->smarty->setTemplateDir(__DIR__ . '/../view');
        $this->smarty->setCompileDir(__DIR__ . '/../storage/templates_c');
        $this->smarty->setCacheDir(__DIR__ . '/../storage/cache');
        $this->smarty->setConfigDir(__DIR__ . '/../storage/configs');
     }

    public function render($templateFile, $data = []) {
        // Assign data to Smarty
        foreach ($data as $key => $value) {
            $this->smarty->assign($key, $value);
        }

        // Render the template
        return $this->smarty->fetch($templateFile . '.tpl');
    }
}



?>