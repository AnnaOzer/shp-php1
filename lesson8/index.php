<?php

// подключить модель
require './model.php';

// получить картинки из базы
$images = dbQuery('
  SELECT * FROM `images`
');

// передать их во вью - подключив тут вью
require './view/index.php';