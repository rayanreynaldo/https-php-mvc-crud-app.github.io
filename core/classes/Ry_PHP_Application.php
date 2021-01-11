<?php

error_reporting(-1);

class Ry_PHP_Application {

    public function view($filename, $data = []){

        if(file_exists("../app/views/" . $filename . ".php"))
        {
            require_once "../app/views/$filename.php";

        } else {
            echo "Sorry $filename.php file not found!";
        }

    }

    public function model($filename){
   
        if(file_exists("../app/models/" . $filename . ".php"))
        {
            require_once "../app/models/$filename.php";
            return new $filename();

        } else {
            echo "Sorry $filename.php file not found!";
        }
    }

    public function helper($filename){

        if(file_exists("../core/helpers/".$filename.".php")){
  
           require_once "../core/helpers/".$filename.".php";
  
        } else {
           echo "Sorry helper $filename file not found!";
        }
  
    }
}
