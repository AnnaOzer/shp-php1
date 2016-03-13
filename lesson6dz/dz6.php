<?php

// проверка типа файлов - что у нас изображение

function typeIsImage($str)
{
    return ('image' == substr($str, 0, 5)) ? true : false;
}

// загрузка файлов

$uploadDir = __DIR__ . '/gallery_files/';
$displayDir = '/lesson6dz/gallery_files/';

$newName = $uploadDir . basename($_FILES['image']['name']);

if (is_uploaded_file($_FILES['image']['tmp_name'])) {

       if (typeIsImage($_FILES['image']['type'])) {

        $res = move_uploaded_file(
            $_FILES['image']['tmp_name'],
            $newName
        );
        echo 'Файл ' . basename($_FILES['image']['name']) . ' успешно загружен.';

    } else {
        echo 'Детектирована попытка загрузить файл, отличный от изображения. Попытка пресечена.';
        unset($_FILES);

    }

}

?>

<!--Загрузка файлов на сервер - форма-->

<form method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
</form>

<!--Вывод галереи изображений-->

<?php

function excludeDots($arr) {
    if(in_array('.', $arr)
    || in_array('..', $arr)) {
        foreach ($arr as $key => $value) {
            if ( ($value == '.') || ($value == '..')) {
                unset($arr[$key]);
            }
        }
    }
    return $arr;
}

$dir_gallery = excludeDots( scandir($uploadDir) );
?>
<?php foreach ($dir_gallery as $image) : ?>
    <div style="display: inline-block; margin: 10px; padding: 10px; border: 1px dashed green; border-radius: 8px;">
        <div><?php echo $image; ?></div>
        <img src="<?php echo $displayDir . $image; ?>" alt="Изображение <?php echo $image; ?>" width="300">
    </div>
<?php endforeach; ?>







<?php

/**
(PHP 5, PHP 7)
scandir — Получает список файлов и каталогов, расположенных по указанному пути

Описание ¶

array scandir ( string $directory [, int $sorting_order = SCANDIR_SORT_ASCENDING [, resource $context ]] )
Возвращает array, содержащий имена файлов и каталогов, расположенных по пути, переданном в параметре directory.

Список параметров ¶

directory
Сканируемый каталог.

sorting_order
По умолчанию, сортировка производится в алфавитном порядке по возрастанию. Если необязательный параметр sorting_order установлен в значение SCANDIR_SORT_DESCENDING, сортировка производится в алфавитном порядке по убыванию. Если же он установлен в значение SCANDIR_SORT_NONE, то сортировка не производится.

context
За описанием параметра context обратитесь к разделу "Потоки" данного руководства.

Возвращаемые значения ¶

Возвращает array имен файлов в случае успеха или FALSE в случае ошибки. Если directory не является каталогом, возвращается FALSE и генерируется сообщение об ошибке уровня E_WARNING.

Список изменений ¶
 */

