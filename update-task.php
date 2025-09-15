<?php
if(isset($_POST['task']) && isset($_POST['index'])){
    $index=$_POST['index'];
    $newTask=$_POST['task'];

    $tasks=file('todo.txt', FILE_IGNORE_NEW_LINES);
    $tasks[$index] = $newTask;
    file_put_contents('todo.txt', implode(PHP_EOL, $tasks) . PHP_EOL);

}
header('Location: index.php');
exit;
?>