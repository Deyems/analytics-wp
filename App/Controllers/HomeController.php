<?php
namespace App\Controllers;
/**
 * @package App\Controllers;
 */
class HomeController extends BaseController
{
    //MiddleWare Stuff
    // protected $requiresAuth = [
    //     '/',
    //     'auth/login'
    // ];
    public function index(){
        // if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
        //     return $this->redirect('/auth/login');
        // }
        // var_dump($_SESSION['user_id']);
        $this->checkLogin();
        $this->loadView('dashboard', ['title' => 'Dashboard','script' => 'dashboard.js']);
    }
}
