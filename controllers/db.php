<?php

class Connection {
    private $host;
    private $username;
    private $passwd;
    private $dbname;
    
    function __construct() {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->passwd = '';
        $this->dbname = 'todolist';
    }
    
    function create() {
        $connection = new mysqli($this->host, $this->username, $this->passwd, $this->dbname);
        return $connection;
    }
    
    function close($connection) {
        $connection->close();
    }
}
/*
$conn = new Connection();
if($conn->create()) {
    echo 'Conexión establecida';
} else {
    echo 'Problema bd';
} */