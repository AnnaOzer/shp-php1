<?php

// результат над целыми числами - целое число; над float результат float
$answer =  5 + 4; // сложение
$answer =  $answer - 5; // вычитание
$answer =  $answer * $answer; //  умножение
$answer =  $answer % 3; // остаток от деления

// результат число с плавающей точкой, если делится нацело то целое число
$answer =  $answer / 2; // деление

// сокращенная запись арифметических операций
$answer += 4;
$answer -= 5;
$answer /= 2;
$answer *= $answer;
$answer %= 3;

//инкремент и декремент
// $i++  ++$i  $i--  --$i
$i = 1;
echo $i++ + ++$i; // 4
$i = 1;
echo ++$i + $i++; // 4 - собеседования
$i = 1;
echo ++$i + ++$i; // 5
$i = 1;
echo $i++ + $i++; // 3

// операции сравнения возвращают булевские значения true или false
/*
 *
==
!=
<
>
<=
>=
===
!==

*/

// операции над строками. конкатенация - объединение строк.

$a = 'Hello, ';
$b = 'World';
$c = $a . $b;
echo $c;

// конкатенация строк. сокращенная запись.

$a = 'Hello, ';
$b = 'World';
$a .= $b;
echo $a;

// логические операции
/*
выполняются над булевскими операндами, возвращают булевское значение

and $$
or ||
!
xor
*/

$a =  true;
$b =  false;
var_dump($c = ($a && $b));
var_dump($d = ($a || $b));
var_dump($e = (!$a));
var_dump($f =($a xor $b));