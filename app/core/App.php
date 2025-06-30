<?php

use Soap\Url;

class App
{
    private $controller = 'Home';
    private $method = 'index';

    private function splitURL()
    {
        $path = $_SERVER['PATH_INFO'] ?? '/home';
        $path = trim($path, '/');
        return $path ? explode('/', trim($path,"/")) : ['home'];
    }

    public function loadController()
    {
        $path =$this->splitURL();
        //select controller
        $filename = "../app/controllers/" . ucfirst($path[0]) . ".php";

        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($path[0]);
            unset($path[0]);
        } else {
            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = "_404";
        }
        
        $controller = new $this->controller;
         //select method
        if(!empty($path[1])){
            if(method_exists($controller, $path[1]))
            {
                $this->method = $path[1];
                unset($path[1]);
            }
        }
        call_user_func_array([$controller,$this->method],$path);
    }
}


