<html>
<head>
    <title>Галерея изображений</title>
</head>
<body>
<h1>Галерея изображений</h1>
<h2>Применение короткого тега для вывода заданного значения</h2>
    <?php for($i = 1; $i < 7; $i++) : ?>
        <div style="display: inline-block; padding: 10px; border: 1px solid green; ">
            <a href="img/<?=$i; ?>.jpg">Картинка № <?=$i; ?></a><br>
            <img src="img/<?=$i; ?>.jpg" width="200">
        </div>
    <?php endfor; ?>
</body>
</html>



