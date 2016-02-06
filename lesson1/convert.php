<?php
// неявное приведение типов
$a = 'How much is the ';
$b = 123; // конкатенация потребует строки, число приведется к строке
echo $a . $b;

// приведение к типу
// (string)  (int)  (double)  (bool)
$d = 3.14159;
echo (int)$d; // выведет 3

$f = '123hniuby7tv';
$g = (int)$f;
var_dump($g); // 123

$f1 = 'hniuby7tv';
$g1 = (int)$f1;
var_dump($g1); // 0