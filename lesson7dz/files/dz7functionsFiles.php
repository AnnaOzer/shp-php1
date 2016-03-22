<?php

// проверка типа файлов - что у нас изображение

function typeIsImage($str)
{
    return ('image' == substr($str, 0, 5)) ? true : false;
}

function uploadGalleryImage($config) {

    // проверка массива $_POST
    $descr='';
    if (!empty($_POST)) {
        $descr = (isset($_POST['descr'])) ? $_POST['descr'] : '';
    }

    // если файл загружен
    if(is_uploaded_file($_FILES['image']['tmp_name'])) {
        if(typeIsImage($_FILES['image']['type'])) {
            if (move_uploaded_file($_FILES['image']['tmp_name'],  $config['files']['galleryDir'] .'/'. basename($_FILES['image']['name']))) {

                // подготовка массива для записи в БД
                $newImage=[
                    'file'=>basename($_FILES['image']['name']),
                    'descr'=>$descr,
                ];


                // работа с бд
                if (addImage($newImage, $config)) {
                    return true;
                }

            }
        }

        // если файл не загружен
    } else {
        return false;
    }

}




function uploadImage($config) {
    move_uploaded_file($_FILES['image']['tmp_name'], $config['files']['galleryDir'] .'/'. basename($_FILES['image']['name']));
    //var_dump($_FILES['image']['tmp_name']);
   // var_dump(basename($_FILES['image']['name']));
    //var_dump($config['files']['galleryDir'] .'/'. basename($_FILES['image']['name']));
}
