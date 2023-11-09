<?php
$newitem = $_POST['add'];
file_put_contents("data.txt", "\n". $newitem, FILE_APPEND);

header("Location: http://localhost:8888/loops");

?>