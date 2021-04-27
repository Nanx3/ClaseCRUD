<?php

require_once '../controllers/task.php';


if (!isset($_GET['id']) || $_GET['id'] == '') {
     header("Location: ../index.php");
}

$id = $_GET['id'];


if (!isset($_POST['description']) || $_POST['description'] == ''
   || !isset($_POST['status']) || $_POST['status'] == '') {
    exit('ERROR BD: Transaction error');
}

$request = [
    "id" => $id,
    "description" => $_POST['description'],
    "status" =>  $_POST['status']
];

$task = new Task();
$result = $task->update($request);

if ($result->connect_error) {
    die('Error de conexión ' . $connection->connect_error);
} else {
    header("Location: ../index.php");
}