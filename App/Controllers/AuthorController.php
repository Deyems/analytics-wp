<?php

namespace App\Controllers;

class AuthorController extends BaseController{
    public function index(){
        $this->loadView('author', ['title' => 'Author Dashboard', 'script' => 'main.js']);
    }
}
