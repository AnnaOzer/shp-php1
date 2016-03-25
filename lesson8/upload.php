<?php

$name = 'image';

if(!empty($_FILES)) {
    if(isset($_FILES[$name])) {
        if(0 == $_FILES[$name]['error']) {

            $newFileName = __DIR__ . '/img/' . $_FILES[$name]['name'];

            move_uploaded_file(
                $_FILES[$name]['tmp_name'],
                $newFileName
            );


        }
    }
}