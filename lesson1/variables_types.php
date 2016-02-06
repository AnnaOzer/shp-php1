<?php

$a = 2;
$b = 3;
$c = 6;

// на целом типе определены арифметические операции
var_dump($a + $b);
var_dump($a - $b);
var_dump($a * $b);
var_dump($a % $b); // остаток от деления

// есть дробные числа с плавающей точкой, имеющие определенную точность
// определено +-*%  а также деление /

var_dump( ($a / $b) * $b);

var_dump($c / $b); // если числа делятся нацело, результат деления приводится к int
//  int(2)

$my_float = .051e2;

var_dump($my_float); // float(5.1)

// строки в 'строка' и "строка"

// $a и $b идентичны в этот момент
$a = 'Hello, world!';
$b = "Hello, world!";

// $a и $b разные
$name = 'Ivan';
$a = 'Hello, $name!'; // выведется без изменений
$b = "Hello, $name!"; // подстановка значения переменной
echo $a; // Hello, $name!
echo $b; // Hello, Ivan!

// есть операции над строками. конкатенация
$hello = 'Hello';
$name = 'Ivan';
$out = $hello . ', ' . $name;
echo $out;

// кавычки внутри кавычек
$name1 = "Hello, 'Ivan'";
$name2 = 'Hello, "Ivan"';
echo $name1;
echo $name2;
// одинарная кавычка внутри одинарных - экранирование, \ слеш
$name3 = 'I\'van';
echo $name3;