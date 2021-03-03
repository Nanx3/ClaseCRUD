<?php

require_once '../controllers/task.php';

$id = $_GET['id'];

$description = $_POST['description'];
$status = $_POST['status'];

$request = [
    "id" => $id,
    "description" => $description,
    "status" => $status
];

$task = new Task();
$result = $task->update($request);

if ($result->connect_error) {
    echo "Error BD: Transaction error";
} else {
    header("Location: ../index.php");
}