<?php 

$tasks=file('todo.txt' ,FILE_IGNORE_NEW_LINES);

echo"<h1> simple TO-DO List </h1>";

echo "<form action ='add-task.php' method='POST'>
        <input type='text' name='task' required >
        <button type='submit'> Add Task </button>
        </form>";

echo "<ul>";
foreach($tasks as $index => $task){
    echo"<li>
            <form action ='update-task.php' method='POST' style='display:inline;'>
                <input type='text' name='task' value='$task' required>
                <input type='hidden' name='index' value='$index'>
                <button type ='submit'>Update</button>
            </form>
            <a href='delete-task.php?index=$index'>Delete</a>
            </li>";
}
echo"</ul>";
?>


