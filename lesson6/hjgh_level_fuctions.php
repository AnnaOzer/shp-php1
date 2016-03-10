<?php

/*
 * Функции высокого уровня для работы с файлами
 * */

// проверка, что файл существует, возвращает true или false

if ( file_exists('2.txt') ) {
    echo 'Есть такой файл 2.txt'; // Есть такой файл 2.txt
}
?><br><?php

if ( !file_exists('5.txt') ) {
    echo 'Нет такого файла 5.txt'; // Нет такого файла 5.txt
}
?><br><?php

// проверка существования файла и то, что вы имеете право его читать

if ( is_readable('2.txt') ) {
    echo 'Есть такой файл 2.txt и его можно читать'; // Есть такой файл 2.txt и его можно читать
}
?><br><?php

if ( !is_readable('5.txt') ) {
    echo 'Нет такого файла 5.txt или его нельзя читать'; // Нет такого файла 5.txt или его нельзя читать
}
?><br><?php

/*
 * Функции высокого уровня для работы с файлами - чтение и запись
 * */

// целиком прочитать содержимое файла и вернуть его - здесь в переменную
$str = file_get_contents('files/1.txt');
echo $str;
?><br><?php

// в заданный файл записать текст
file_put_contents('files/4.txt', $str); // файла не было, он создался и туда записалась $str

/*
 * еще функции высокого уровня
 * */

// функция file берет файл и возвращает массив, в котором каждый элемент - одна строка файла
$s = file('3.txt');
var_dump($s); // array(4) { [0]=> string(21) "In silva orta abies " [1]=> string(20) "In silva crescebat " [2]=> string(26) "Per totum annum gracilis " [3]=> string(15) "Et viridis erat" }
?><br><?php

// функция readfile читает файл и целиком выводит его в браузер, в переменую не удастся передать
readfile('3.txt'); // In silva orta abies In silva crescebat Per totum annum gracilis Et viridis erat

// чтение файлов из папки, читать мануал по dir
