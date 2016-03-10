<?php

// запись в файл

// открытие файла, указан режим добавления
$res = fopen('3.txt', 'a');

// строки
$str3 = 'Per totum annum gracilis';
$str4 = 'Et viridis erat';

// на запись есть две одинаковые функции fwrite($res, $str) и fputs($res, $str),
// возвращают число байт или false в случае неудачи

echo fwrite($res, $str3); // 24
?><br><?php
echo fputs($res, $str4); // 15


// закрытие файла
fclose($res);