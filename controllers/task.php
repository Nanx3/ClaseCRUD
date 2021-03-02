<?php

require_once 'db.php';

class Task {
    
    function list() {
      $connection = new Connection;
      
      // Crear la conexión
      $mysql = $connection->create();
      
      $result = $mysql->query("SELECT * FROM tasks");
      $tasks = $result->fetch_all(MYSQLI_ASSOC);
      
      // Cerrar conexión
      $connection->close($mysql);
      
      return $tasks;
    }
    
    function create($request) {
      $connection = new Connection;
      
      // Crear la conexión
      $mysql = $connection->create();
      
      $result = $mysql->query("INSERT INTO tasks(description,status) values ('{$request['description']}','{$request['status']}')");
      
      // Cerrar conexión
      $connection->close($mysql);
      
      return $result;  
    }
    
    function show($id) {
      $connection = new Connection;
      
      // Crear la conexión
      $mysql = $connection->create();
      
      $result = $mysql->query("SELECT * FROM tasks WHERE id = $id");
      $task = $result->fetch_assoc();
      
      // Cerrar conexión
      $connection->close($mysql);
      
      return $task;
        
        
    }
    
    function update($request) {
      $connection = new Connection;
      
      // Crear la conexión
      $mysql = $connection->create();
      
      $result = $mysql->query("UPDATE tasks SET description = '{$request['description']}', status = '{$request['status']}' WHERE id = {$request['id']}");
      
      // Cerrar conexión
      $connection->close($mysql);
      
      return $result;
        
    }
    
    function delete($id) {
      $connection = new Connection;
      
      // Crear la conexión
      $mysql = $connection->create();
      
      $result = $mysql->query("DELETE FROM tasks WHERE id = $id");
      
      // Cerrar conexión
      $connection->close($mysql);
      
      return $result;
        
        
    }
}