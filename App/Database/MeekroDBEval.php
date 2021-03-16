<?php
namespace App\Database;

class MeekroDBEval {
    public $text = '';
    
    function __construct($text) {
      $this->text = $text;
    }
}