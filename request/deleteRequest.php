<?php

require_once '../controllers/task.php';


if (!isset($_GET['id']) || $_GET['id'] == '') {
     header("Location: ../index.php");
}

$id = $_GET['id'];

$task = new Task();
$result = $task->delete($id);

if ($result->connect_error) {
    die('Error de conexión ' . $connection->connect_error);
} else {
    header("Location: ../index.php");
}