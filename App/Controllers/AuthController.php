<?php
namespace App\Controllers;

class AuthController extends BaseController{
    public function login(){
        if(isset($_GET['home'])){
            $this->redirect('/');
        }
        $this->loadView('login', ['title' => 'Sign in']);
    }

    public function register(){
        $this->loadView('register', ['title' => 'Sign up']);
    }
    
    public function forgot(){
        $this->loadView('forgot', ['title' => 'Forgot Password']);
    }

    public function store(){
        $email = $this->request->param('email');
        $password = $this->request->param('password');
        var_dump($email, $password);
        // print_r($_POST);
    }

}