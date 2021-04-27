<?php

require_once 'db.php';

class Task {
    function list() {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "SELECT * FROM tasks";
        $result = $mysql->query($sql);
        $tasks = $result->fetch_all(MYSQLI_ASSOC);
        
        // Cerrar conexión
        $connection->close($mysql);
        
        return $tasks;        
    }
    
    function create($request) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "INSERT INTO tasks(description,status) values('{$request['description']}', '{$request['status']}')";
        $result = $mysql->query($sql);
        
        $connection->close($mysql);
        
        return $result;
    }
    
    function show($id) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "SELECT * FROM tasks WHERE id = $id";
        $result = $mysql->query($sql);
     
        $task = $result->fetch_assoc();
        
        $connection->close($mysql);
        
        return $task;        
    }
    
    function update($request) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "UPDATE tasks SET description = '{$request['description']}', status='{$request['status']}' WHERE id = '{$request['id']}'";
        $result = $mysql->query($sql);
             
        $connection->close($mysql);
        
        return $result;          
    }
    
    function delete($id) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "DELETE FROM tasks WHERE id = $id";
        $result = $mysql->query($sql);
             
        $connection->close($mysql);
        
        return $result;     
    }
}