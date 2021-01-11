<?php

class Routing {
   
    // Default controller, method, params

    public $controller = "base";
    public $method     = "method";
    public $params     = [];

    public function __construct()
    {
        $url = $this->url();

        if(!empty($url)){ 
            if(file_exists("../app/controllers/" . $url[0] . ".php")){
                    $this->controller = $url[0];
                    unset($url[0]);
            } else {
                echo "Sorry  ".$url[0].".php not found!";
            }
        }
        
        // Include controller

        require_once "../app/controllers/" . $this->controller . ".php";

        // Instantiate controller

        $this->controller = new $this->controller;


        if(isset($url[1]) && !empty($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);

            } else {
                echo "Sorry  method ".$url[1]." not found!";
            }
        }

        if(isset($url)){
            $this->params = $url;
        } else {
            $this->params = [];
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function url()
    {
        if(isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }

}

?>