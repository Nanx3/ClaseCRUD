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

if ($result) {
    header("Location: ../index.php");
} else {
    echo "Error BD: Transaction error";
}