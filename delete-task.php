<?php
if(isset($_GET['index'])){
    $index = $_GET['index'];
    $tasks=file('todo.txt', FILE_IGNORE_NEW_LINES);
    unset($tasks[$index]);

    file_put_contents('todo.txt',implode(PHP_EOL , $tasks) . PHP_EOL);

}
header('Location: index.php');
exit;
?>