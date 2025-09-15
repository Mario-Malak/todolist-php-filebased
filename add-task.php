<?php
if(isset($_POST['task'])){
    $task = htmlspecialchars($_POST['task'], ENT_QUOTES, 'UTF-8') . PHP_EOL;
    file_put_contents('todo.txt', $task , FILE_APPEND);
}

header('Location: index.php');
exit;
?>
