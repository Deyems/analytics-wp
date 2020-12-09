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
        $this->loadConfig();
        $this->mount();

        // DB::$user = env('DB_USER');
        // DB::$password = env('DB_PASS');
        // DB::$dbName = env('DB_NAME');
        // DB::$host = env('DB_HOST'); //defaults to localhost if omitted

        // // DB::$port = '4042'; // defaults to 3306 if omitted
        // // DB::$encoding = 'utf8'; // defaults to latin1 if omitted
        // var_dump(DB::get());
        // DB::query("SELECT * FROM wpanalytics");
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
    public function loadConfig(){
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
        // echo "<pre>";
        // print_r($lines);
        // echo "</pre>";
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

}
