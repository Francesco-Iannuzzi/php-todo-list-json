<?php


if (isset($_POST['new_task'])) {
    $task = [
      "text" => $_POST['new_task'],
      "done" => false  
    ];

    $tasks_string = file_get_contents('tasks.json');
    $tasks_array = json_decode($tasks_string, true);
    array_unshift($tasks_array, $task);


    $new_tasks_json_string = json_encode($tasks_array);
    file_put_contents('tasks.json', $new_tasks_json_string);
    header('Content-Type: application/json');
    echo $new_tasks_json_string;
}