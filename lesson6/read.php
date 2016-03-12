<?php

/*
 * ФУНКЦИЯ fread($res, $numBytes)
 * */

// открытие файла
$res = fopen('files\1.txt', 'r');

// чтение из файла
$str = fread($res, 3); // читает указанный ресурс до заданной длины в байтах или конца файла
echo $str; // Hel
/*
 * Для функции fread
 * можно задавать вторым аргументом большое значение, здесь 1024 например, что бы файл был прочитан целиком
 * Либо пользоваться другими функциями
 * */

// закрытие файла
fclose($res);


?><br><?php

/*
 * ФУНКЦИЯ fgets
 * */


// открытие файла
$res = fopen('2.txt', 'r');

// чтение из файла
echo fgets($res, 1024); // читает указанный ресурс до заданной длины в байтах или конца __строки__
echo fgets($res, 1024); // можно применять последовательно, читает следующую строку, они запоминают внутренний указатель

/*
 * Фукция fseek()
 * может вернуть указатель на заданное место
 * */

// закрытие файла
fclose($res);