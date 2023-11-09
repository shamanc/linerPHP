

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="process.php" method="post"> 
    <?php
    $file = fopen("data.txt", "r");
    $i = 1;

    while (!feof($file)) {
        $text = trim(fgets($file));
        echo '<input type="text" name="item', $i, '" value="', $text, '">';
        $i++;
    }
    ?>
    <input type="submit" value="save">
</form>

<hr>
<form action="additem.php" method="post">
    <input type="text" name="add">
    <input type="submit" value="Add item">
</form>


</body>
</html>