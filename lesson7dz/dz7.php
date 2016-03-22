<?php

include_once __DIR__ . '/files/dz7functionsDb.php';
include_once __DIR__ . '/files/dz7functionsFiles.php';

$images = getAllImages($config);


?>
<!--Загрузка файлов на сервер - форма-->

<form method="post" enctype="multipart/form-data" action="dz7loader.php">
    Файл: <input type="file" name="image"><br>
    Описание: <input type="text" name="descr"><br>
    <input type="submit" value="Отправить">
</form>

<?php
foreach ($images as $image) : ?>
    <div style="display: inline-block; border-radius: 20px; border: dashed 1px green; margin: 20px;">
        <div style="margin: 20px;"><?php echo $image['descr']; ?></div>
        <div style="margin: 20px;"><img src="<?php echo $config['files']['galleryDir'] . '/' . $image['file'];?>" width="300"></div>
    </div>
<?php endforeach;



