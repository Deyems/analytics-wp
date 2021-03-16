<?php
namespace App;
use App\Database\DB;
use App\Database\DBHelper;
use App\Database\DBTransaction;
use App\Database\MeekroDB;
use App\Database\MeekroDBEval;
use App\Database\MeekroDBException;
use App\Database\WhereClause;

class Application{
    public function __construct(){
        $this->loadSession();
        $this->loadConfig();
        $this->mount();
    }

    protected function mount(){
        $router = new Router();
        $router->executeUrl();
    }

    /**
     * Check Config
     */
    protected function checkConfig(){
        if(!file_exists(DOT_ENV_FILE)) throw new \Exception('You must create a .env file in the root folder');
    }

    /**
     * Load .env file
     */
    protected function loadConfig(){
        $this->checkConfig();

        $fh = fopen(DOT_ENV_FILE, "r");
        if(!$fh) throw \Exception('Unable to open .env file for reading');
        $lines = [];
        while(!feof($fh)){
            $line = trim(fgets($fh));
            if($line) $lines[] = $line;
        }
        fclose($fh);
        $this->parseConfig($lines);
    }

    protected function parseConfig(array $lines){
        foreach ($lines as $line) {
            # code...
            $splitted = explode('=',$line);
            $key = $splitted[0];
            str_ireplace('"',"",$splitted[1]);
            $value = trim(str_ireplace('"',"",$splitted[1]));
            $_ENV[$key] = $value;
        }
    }

    protected function loadSession(){
        session_start();
    }

}
