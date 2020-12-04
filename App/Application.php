<?php
namespace App;

class Application{
    public function mount(){
        $router = new Router();
        $router->executeUrl();
    }
}
