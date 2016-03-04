<html>
<head>
    <title>Галерея изображений</title>
</head>
<body>
<h1>Галерея изображений</h1>
    <?php for($i = 1; $i < 7; $i++) : ?>
        <div style="display: inline-block; padding: 10px; border: 1px solid green; ">
            <a href="img/<?php echo $i; ?>.jpg">Картинка № <?php echo $i; ?></a><br>
            <img src="img/<?php echo $i; ?>.jpg" width="200">
        </div>
    <?php endfor; ?>
</body>
</html>



