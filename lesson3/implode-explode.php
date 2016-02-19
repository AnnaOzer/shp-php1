<?php

$a = [1, 2, 3, 4, 5];

// функция implode(разделитель, массив)
// собирает строку из массива
echo implode(';', $a); // 1;2;3;4;5
?><br><?php


// функция explode(по какому символу разделить, строка) - функция обратная к ней
// строку превращает в массив
$arr = explode(':', '12:85:00');
var_dump($arr);
?><br><?php

$arr[2] = '01';
var_dump($arr);

// см. формат csv для хранения данных
// см. мануал операции с массивами