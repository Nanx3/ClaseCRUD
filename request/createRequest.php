<?php

require_once '../controllers/task.php';

$description = $_POST['description'];
$status = $_POST['status'];

$request = [
    "description" => $description,
    "status" => $status
];

$task = new Task();
$result = $task->create($request);

if ($result->connect_error) {
    echo "Error BD: Transaction error";
} else {
    header("Location: ../index.php");
}