<?php

namespace application\core;

use application\core\View;

class Router{

    protected $routes = [];
    protected $param = [];

    function __construct(){
        $arr = require 'application/config/routes.php';

        foreach ($arr as $key => $value) {
            $this->add($key, $value);
        }
    }


    public function add($routes, $param){
        // Добавить маршрут 

        $route = '#^' . $routes . '$#';
        $this->routes[$route] = $param;

    }

    public function math(){
        // Проверить маршрут через глобальную переменную SERVER!

        $url = str_replace('mvcsecond', '', $_SERVER['REQUEST_URI']);
        $url = trim($url, '/');
        foreach ($this->routes as $routes => $param) {
            if(preg_match($routes, $url, $matches)){
                $this->param = $param;

                return true;
            }

        }

        return false;

    }

    public function run(){
        // Запуск Роутера

        if($this->math()){

            $path = 'application\controllers\\' . ucfirst($this->param['controller']) . 'Controller'; 

            if(class_exists($path)){

                $action = $this->param['action'] . 'Action';

                if(method_exists($path, $action)){

                    $controller = new $path($this->param);
                    $controller->{$action}();
                }else{
                    View::errorCode(404);
                }


            }else{
               View::errorCode(404);
            }
        }else{
             View::errorCode(404);
        }
    }
}