<?php
namespace App\Controllers;

class AuthController extends BaseController{
    public function login(){
        $this->loadView('login', [
            'abah' => 'Me', 
            'items' => ['app', 'bad', 'cat']
        ]);
    }
}