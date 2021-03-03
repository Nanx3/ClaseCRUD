<?php

require_once '../controllers/task.php';

$id = $_GET['id'];

$task = new Task();
$result = $task->delete($id);

if ($result->connect_error) {
    echo "Error BD: Transaction error";
} else {
    header("Location: ../index.php");
}