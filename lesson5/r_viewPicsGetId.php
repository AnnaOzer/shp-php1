<?php
    $id = (isset($_GET['id'])) ? (int)$_GET['id'] : 1;
?>

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
