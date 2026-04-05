<?php
//use core\Response;
//namespace core; 
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}
function abort ($code=404){
http_response_code($code);

   require base_path("Views/{$code}.php"); 

    die();
}
function authorize($condition, $status = \core\Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}
function base_path($path){
    return  BASE_PATH . $path;
}
function view($path,$attributes=[]){
    extract($attributes);
require base_path('Views/' . $path);
}
function redirect($path){
      header("location: {$path}");
    exit();
}
function old($key,$defualt=''){
core\Session::get('old')[$key]??' ';
}
function login($user) {
    $_SESSION['user'] = [
        'id' => $user['id'],      
        'email' => $user['email'] 
    ];
    session_regenerate_id(true);
}
function logout(){
    $_SESSION = [];
    session_destroy();
$params = session_get_cookie_params();
setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'],$params['secure'],$params['httponly']);
}