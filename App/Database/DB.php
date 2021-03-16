<?php
namespace App\Database;

class DB {
    // initial connection
    public static $dbName = '';
    public static $user = '';
    public static $password = '';
    public static $host = 'localhost';
    public static $port = 3306; //hhvm complains if this is null
    public static $socket = null;
    public static $encoding = 'latin1';
    
    // configure workings
    public static $param_char = '%';
    public static $named_param_seperator = '_';
    public static $success_handler = false;
    public static $error_handler = true;
    public static $throw_exception_on_error = false;
    public static $nonsql_error_handler = null;
    public static $pre_sql_handler = false;
    public static $throw_exception_on_nonsql_error = false;
    public static $nested_transactions = false;
    public static $usenull = true;
    public static $ssl = array('key' => '', 'cert' => '', 'ca_cert' => '', 'ca_path' => '', 'cipher' => '');
    public static $connect_options = array(MYSQLI_OPT_CONNECT_TIMEOUT => 30);
    
    // internal
    protected static $mdb = null;
    public static $variables_to_sync = array('param_char', 'named_param_seperator', 'success_handler', 'error_handler', 'throw_exception_on_error',
      'nonsql_error_handler', 'pre_sql_handler', 'throw_exception_on_nonsql_error', 'nested_transactions', 'usenull', 'ssl', 'connect_options');
    
    public static function getMDB() {
      $mdb = DB::$mdb;
      
      if ($mdb === null) {
        $mdb = DB::$mdb = new MeekroDB();
      }
  
      // Sync everytime because settings might have changed. It's fast.
      $mdb->sync_config(); 
      
      return $mdb;
    }
    
    // yes, this is ugly. __callStatic() only works in 5.3+
    public static function get() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'get'), $args); }
    public static function disconnect() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'disconnect'), $args); }
    public static function query() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'query'), $args); }
    public static function queryFirstRow() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryFirstRow'), $args); }
    public static function queryOneRow() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryOneRow'), $args); }
    public static function queryAllLists() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryAllLists'), $args); }
    public static function queryFullColumns() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryFullColumns'), $args); }
    public static function queryFirstList() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryFirstList'), $args); }
    public static function queryOneList() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryOneList'), $args); }
    public static function queryFirstColumn() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryFirstColumn'), $args); }
    public static function queryOneColumn() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryOneColumn'), $args); }
    public static function queryFirstField() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryFirstField'), $args); }
    public static function queryOneField() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryOneField'), $args); }
    public static function queryRaw() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryRaw'), $args); }
    public static function queryRawUnbuf() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'queryRawUnbuf'), $args); }
    
    public static function insert() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'insert'), $args); }
    public static function insertIgnore() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'insertIgnore'), $args); }
    public static function insertUpdate() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'insertUpdate'), $args); }
    public static function replace() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'replace'), $args); }
    public static function update() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'update'), $args); }
    public static function delete() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'delete'), $args); }
    
    public static function insertId() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'insertId'), $args); }
    public static function count() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'count'), $args); }
    public static function affectedRows() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'affectedRows'), $args); }
    
    public static function useDB() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'useDB'), $args); }
    public static function startTransaction() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'startTransaction'), $args); }
    public static function commit() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'commit'), $args); }
    public static function rollback() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'rollback'), $args); }
    public static function tableList() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'tableList'), $args); }
    public static function columnList() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'columnList'), $args); }
    
    public static function sqlEval() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'sqlEval'), $args); }
    public static function nonSQLError() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'nonSQLError'), $args); }
    
    public static function serverVersion() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'serverVersion'), $args); }
    public static function transactionDepth() { $args = func_get_args(); return call_user_func_array(array(DB::getMDB(), 'transactionDepth'), $args); }
    
    
    public static function debugMode($handler = true) { 
      DB::$success_handler = $handler;
    }
    
}

DB::$user = env('DB_USER');
DB::$password = env('DB_PASS');
DB::$dbName = env('DB_NAME');
DB::$host = env('DB_HOST'); //defaults to localhost if omitted
DB::get();