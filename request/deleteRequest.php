<?php

require_once '../controllers/task.php';

$id = $_GET['id'];

$task = new Task();
$result = $task->delete($id);

if ($result) {
    header("Location: ../index.php");
} else {
    echo "Error BD: Transaction error";
}
