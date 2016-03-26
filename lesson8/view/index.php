<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Фотогалерея</title>
</head>
<body>
<ul>
    <?php foreach($images as $image): ?>
        <strong><?php echo $image['title']; ?></strong>
        <li><img src="./img/<?php echo $image['file']; ?>"></li>
    <?php endforeach; ?>
</ul>
<?php include 'form.php'; ?>
</body>
</html>