<?php
namespace libs\SpajtFramework;
class Router {

    function __construct() {
        $_GET['action'] = rtrim($_GET['action'], '/');
        $url = explode("/", $_GET['action']);
        if (file_exists($file)) {
        require $file;
        } else {
            echo "Here";
            $controller = new \controllers\Error();
            echo $controller;
            return false; 
            
        }
        $controller = new $url[0];
        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }

}
