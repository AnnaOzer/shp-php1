<?php

    // небезопасный код
    $id = $_GET['id'];

    /* можно вместо id передать вредоносный код
    " onclick="ARGHHH" 1
    где ARGHHH это вредоносный код на javascript
    */

    // безопасный код - преобразование к нужному типу
    $id = (int)$_GET['id'];
?>

<!--код блока в html скопирован из r_viewPicsGetId.php -->
<!DOCTYPE html>
<head>
    <title>Просмотр картинки № <?php echo $id; ?></title>
    <meta charset="utf-8">
</head>
<body>
<h1>Рисунок номер <?php echo $id; ?></h1>
<img src="img/<?php echo $id; ?>.jpg" width="300">
</body>


</html>