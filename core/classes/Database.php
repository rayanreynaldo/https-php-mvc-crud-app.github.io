<?php

class Database {

    public $hostname = HOSTNAME;
    public $username = USERNAME;
    public $database = DATABASE;
    public $password = PASSWORD;
    public $con;

    public function __construct() {

        $this->con = new mysqli($this->hostname, $this->username, $this->password, $this->database);

        if ($this->con->connect_error) {
            die("Connection failed: " . $this->connect_error);
        }   

        return $this->con;
    }

    public function query($string = ''){
        return $this->con->query($string);
    }

}

