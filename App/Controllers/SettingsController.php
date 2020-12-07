<?php
namespace App\Controllers;

class SettingsController extends BaseController{
    public function index(){
        $this->loadView('settings',['title' => 'Settings Dashboard', 'script' => 'settings.js']);
    }
}