<?php
namespace App\Controllers;

abstract class BaseController{
    public function loadView($name, $data=[]){
        ob_start();
        extract($data);
        require_once VIEW_PATH. $name. ".php";
        $content = ob_get_contents();
        ob_clean();
        echo $content;
    }
}
