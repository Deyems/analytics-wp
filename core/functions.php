<?php
if(!function_exists('env')){
    //Create the env function
    function env($key, $default=''){
        // if(isset($_ENV[$key])) return $_ENV[$key];
        // return $default;
        
        //To ternary
        return isset($_ENV[$key]) ? $_ENV[$key] : $default;
    }
}

/** Helpers to namespace App\Database */
function meekrodb_error_handler($params) {
    if (isset($params['query'])) $out[] = "QUERY: " . $params['query'];
    if (isset($params['error'])) $out[] = "ERROR: " . $params['error'];
    $out[] = "";
    
    if (php_sapi_name() == 'cli' && empty($_SERVER['REMOTE_ADDR'])) {
      echo implode("\n", $out);
    } else {
      echo implode("<br>\n", $out);
    }
    
    die;
  }
  
  function meekrodb_debugmode_handler($params) {
    echo "QUERY: " . $params['query'] . " [" . $params['runtime'] . " ms]";
    if (php_sapi_name() == 'cli' && empty($_SERVER['REMOTE_ADDR'])) {
      echo "\n";
    } else {
      echo "<br>\n";
    }
  }

  function getFlash($key){
    return \App\Http\Session::getInstance()->getFlashData($key);
  }