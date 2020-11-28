<?php

// echo "Welcome to our Program!". date('Y-m-d H:i:s');
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

// $uri = isset($_SERVER['PHP_SELF']) ? trim($_SERVER['PHP_SELF']) : '/';
// $uri = isset($_SERVER['REQUEST_URI']) ? trim($_SERVER['REQUEST_URI']) : '/';
// echo $uri;
function getCleanURI(){
    $uri = isset($_SERVER['PHP_SELF']) ? trim($_SERVER['PHP_SELF']) : '/';
    // $uri = isset($_SERVER['REQUEST_URI']) ? trim($_SERVER['REQUEST_URI']) : '/';
    $uri = str_ireplace('index.php', '', $uri);
    $uri = trim($uri,'/');
    return $uri;
}

function homePage(){
    // echo "Welcome to home page";
    require_once "homepage.php";
}

function usersApi(){
    header('Content-type: application/json');
    echo json_encode(['status' => 'ok']);
    // exit;
}

$uri = getCleanURI();
// echo $uri;
//ROUTING TO CREATE FRAMEWORK
// switch ($uri) {
//     case '':
//         homePage();
//         break;
//     case 'about':
//         echo 'About Page';
//         break;
//     case 'contact':
//         header('Content-type: application/json');
//         print_r(json_encode(['status' => 'ok']));
//         break;
//     case 'login':
//         echo 'login Page';
//         break;
//     case 'api/users':
//         // echo 'Users API';
//         usersApi();
//         break;
//     default:
//         die('404 NOT found');
// }

$routes = [
    '' => 'homePage',
    'api' => 'usersApi'
];

class HomepageController{
    public static function index($greet){
        echo "$greet Welcome to Index Really?";
    }
}
$obj = new HomepageController();
call_user_func(['HomepageController','index'],'Hi');

/*
foreach($routes as $url => $handler){
    if($url === $uri){
        call_user_func($handler);
        exit;
    }
}
*/