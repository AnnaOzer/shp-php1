<?php

include_once __DIR__  . '/files/dz7functionsDb.php';
include_once  __DIR__  . '/files/dz7functionsFiles.php';



uploadGalleryImage($config);

header('Location: ./dz7.php');