<?php
namespace App\Controllers;
use App\Http\Request;

abstract class BaseController{

    protected $request;

    public function __construct(){
        $this->request = new Request();
    }

    public function loadView($name, $data=[]){
        ob_start();
        extract($data);
        require_once VIEW_PATH. $name. ".php";
        $content = ob_get_contents();
        ob_clean();
        echo $content;
    }

    public function redirect($to){
        var_dump(header('Location: '. $to));
        exit;
    }
}
