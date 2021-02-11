<?php
namespace App\Controllers;
/**
 * @package App\Controllers;
 */
class HomeController extends BaseController
{
    
    public function index(){
        $this->checkLogin();
        $this->loadView('dashboard', ['title' => 'Dashboard','script' => 'dashboard.js']);
    }
}
