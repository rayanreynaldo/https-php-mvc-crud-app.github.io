<?php

class Base extends Ry_PHP_Application {
     
    public function method()
    {
        $this->home();
    }
    
    public function home()
    { 
        $this->helper('html');
        
        $data = [
            'title' => 'Welcome | PHP Crud Application'
        ];
        
        $this->view("home", $data);
    }
}