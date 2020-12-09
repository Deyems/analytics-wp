<?php
namespace App\Controllers;
/**
 * @package App\Controllers;
 */
class HomeController extends BaseController{
    public function index(){
        // $db_host = env('DB_HOST');
        // var_dump($db_host);
        $this->loadView('dashboard', ['title' => 'Dashboard','script' => 'dashboard.js']);
    }
}
