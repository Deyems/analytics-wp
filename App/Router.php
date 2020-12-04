<?php
namespace App;

class Router{
    protected $serverInfo;
    const path_info = 'PATH_INFO';
    const req_mthd = 'REQUEST_METHOD';
    protected $requestedUrl = '/';
    protected static $requestMethod = 'get';
    protected static $routes = [];
    protected static $allowedHttpMethods = ['get', 'post', 'put', 'patch', 'delete'];


    public function __construct($serverInfo = null)
    {
        $this->serverInfo = $_SERVER;
    }

    public static function startsWith($str, $char):bool{
        return substr($str, 0, 1) === $char;
    }

    /**
     * Dynamic calling of methods routes depend on.
     * @param string $nameofmethod is the method name called
     * @param array $arguments[0] - path; $arguments[1] - Controller
     */
    public static function __callStatic($nameofmethod, $arguments){
        static::$requestMethod = strtolower($_SERVER[self::req_mthd]);

        if(in_array($nameofmethod, static::$allowedHttpMethods)){
            static::addRoute($arguments[0],$arguments[1], $nameofmethod);
            return;
        }
        throw new \BadMethodCallException('Message not found: '. $nameofmethod);
    }

    private function getRequestedUrl(): string {
        $requestedUrl = isset($this->serverInfo[self::path_info]) ? 
                        $this->serverInfo[self::path_info] : 
                        '/';
        $url = trim($requestedUrl, '/');
        if(!static::startsWith($url,'/')){
            $url = '/'. $url;
        }
        return $url;
    }

    public function executeUrl(){
        $this->requestedUrl = $this->getRequestedUrl();
        $url = $this->getRequestedUrl();
        $reqMethod = strtolower($_SERVER['REQUEST_METHOD']);
        $foundRoute = null;
        foreach (static::$routes as $key => $route) {
            if(!static::startsWith($route['path'], '/')){
                $route['path'] = '/'. $route['path'];
            }

            if($route['path'] === $url && $route['method'] === $reqMethod){
                $foundRoute = $route;
                break;
            }
        }

        if(!$foundRoute){
            $controller = 'App\Controllers\\'.'NotFoundController';
            return call_user_func_array(array(new $controller(),'index'),array());
        }

            $parts = explode('@', $foundRoute['callback']);
            $controller = 'App\Controllers\\'.$parts[0];
            return call_user_func_array(array(new $controller, $parts[1]),array());
    }

   
    // public static function get($path, $callback){
    //     static::addRoute($path, $callback);
    // }

    public static function addRoute($path, $callback, $method = 'get'){
        $found = false;
        
        foreach(static::$routes as $route){
            if($route['path'] === $path && $route['method'] === $method){
                $found = true;
                break;
            }
        }

        if(!$found){
            static::$routes[] = [
                'path' => $path,
                'callback' => $callback,
                'method' => $method
            ];
        }
    }

}
