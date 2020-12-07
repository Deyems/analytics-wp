<?php
namespace App\Controllers;

class AuthController extends BaseController{
    public function login(){
        if(isset($_GET['home'])){
            $this->redirect('/');
        }
        $this->loadView('login', ['title' => 'Login']);
    }

    public function store(){
        $email = $this->request->param('email');
        $password = $this->request->param('password');
        var_dump($email, $password);
        // print_r($_POST);
    }

}