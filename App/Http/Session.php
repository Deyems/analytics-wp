<?php
namespace App\Http;

use \Aura\Session\SessionFactory;

class Session{
    protected $segments;
    private static $instance = null;

    private function __construct(){
        $sessionFactory = new SessionFactory;
        $session = $sessionFactory->newInstance($_COOKIE);
        $this->segments = $session->getSegment('App\WpAnalytics');
    }

    public static function getInstance()
    {
      if (self::$instance == null)
      {
        self::$instance = new static();
      }
   
      return self::$instance;
    }

    public function setSessionData($key, $value){
        $this->segments->set($key, $value);
        // return $this->segments->set($key, $value);
    }

    public function getSessionData($key){
        return $this->segments->get($key);
    }

    public function setFlashData($key, $value){
        $this->segments->setFlash($key, $value);
        // return $this->segments->set($key, $value);
    }

    public function getFlashData($key){
        return $this->segments->getFlash($key);
    }

    public function delete(){
        $this->segments->clear();
    }

}