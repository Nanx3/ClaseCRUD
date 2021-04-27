<?php

require_once '../controllers/task.php';

if (!isset($_POST['description']) || $_POST['description'] == ''
   || !isset($_POST['status']) || $_POST['status'] == '') {
    exit('ERROR BD: Transaction error');
}

$request = [
    "description" => $_POST['description'],
    "status" =>  $_POST['status']
];

$task = new Task();
$result = $task->create($request);

if ($result->connect_error) {
    die('Error de conexión ' . $connection->connect_error);
} else {
    header("Location: ../index.php");
}