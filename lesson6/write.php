<?php

// запись в файл

// открытие файла, указан режим на запись
$res = fopen('3.txt', 'w');

// строки
$str1 = 'In silva orta abies';
$str2 = 'In silva crescebat';

// на запись есть две одинаковые функции fwrite($res, $str) и fputs($res, $str),
// возвращают число байт или false в случае неудачи

echo fwrite($res, $str1); // 19
?><br><?php
echo fputs($res, $str2); // 18
    // в файле In silva orta abiesIn silva crescebat

// закрытие файла
fclose($res);

