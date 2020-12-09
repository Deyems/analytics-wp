<?php
namespace App\Database;

class DBTransaction {
    private $committed = false;
    
    function __construct() { 
      DB::startTransaction(); 
    }
    function __destruct() { 
      if (! $this->committed) DB::rollback(); 
    }
    function commit() {
      DB::commit();
      $this->committed = true;
    }    

}
