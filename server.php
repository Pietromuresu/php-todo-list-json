<?php

$json_tasks = file_get_contents('tasks.json');

$tasks = json_decode($json_tasks);



if(isset($_POST['text']) && strlen($_POST['text']) > 1){
  $newTask = [
    "text" => $_POST['text'],
    "done" => false
  ];
  
  $tasks[] = $newTask;
}

file_put_contents('tasks.json', json_encode($tasks));


header('Content-Type: application/json');
echo json_encode($tasks);