<?php
/*
 * Домашнее задание

Базовый блок
1. Объявите две целочисленные переменные $a и $b и задайте им произвольные
начальные значения. Затем напишите скрипт, который работает по следующему
принципу:
a. если $a и $b положительные, выведите их разность;
b. если $а и $b отрицательные, выведите их произведение;
c. если $а и $b разных знаков, выведите их сумму.
Ноль можно считать положительным числом.
 * */


function takeOperation($a, $b) {

    $a = (int)$a;
    $b = (int)$b;

    if (0 <= $a && 0 <= $b) {
        return $a - $b;
    } elseif (0 > $a && 0 > $b) {
        return $a * $b;
    } else {
        return $a + $b;
    }

}

$a1 = 5;
$b1 = 6;

echo takeOperation($a1, $b1); // -1
?><br><?php

$a2 = -5;
$b2 = -1;

echo takeOperation($a2, $b2); // 5
?><br><?php

$a3 = 6;
$b3 = -3;

echo takeOperation($a3, $b3); // 3
?><br><?php


/*
 * 2. Присвойте переменной $а значение в промежутке [0..15]. С помощью оператора
switch организуйте вывод чисел от $a до 15;
 * */


/*
 *
rand — Генерирует случайное число

int rand ( void )
int rand ( int $min , int $max )
При вызове без параметров min и max, возвращает псевдослучайное целое в диапазоне от 0 до getrandmax(). Например, если вам нужно случайное число между 5 и 15 (включительно), вызовите rand(5, 15).
* */

$d = rand(0, 15);

function printNumbers($d) {
    $d = (int)$d;
    switch($d) {
        case 0:
            echo 0 . ' ';
        case 1:
            echo 1  . ' ';
        case 2:
            echo 2  . ' ';
        case 3:
            echo 3  . ' ';
        case 4:
            echo 4  . ' ';
        case 5:
            echo 5  . ' ';
        case 6:
            echo 6  . ' ';
        case 7:
            echo 7  . ' ';
        case 8:
            echo 8  . ' ';
        case 9:
            echo 9  . ' ';
        case 10:
            echo 10  . ' ';
        case 11:
            echo 11  . ' ';
        case 12:
            echo 12  . ' ';
        case 13:
            echo 13  . ' ';
        case 14:
            echo 14  . ' ';
        case 15:
            echo 15  . ' ';
    }
}

printNumbers($d);
?><br><?php

/*
 * 3. Реализуйте основные 4 арифметические операции (+, -, *, %) в виде функций с
двумя параметрами. Обязательно используйте оператор return.
 * */

function add($a, $b) {
    return $a + $b;
}

function subtr($a, $b) {
    return $a - $b;
}

function mult($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if (0 != $b) {
        return $a / $b;
    } else {
        echo 'На ноль делить нельзя';
        return null;
    }

}

echo add(3, 5); // 8
?><br><?php
echo subtr(3, 5); // -2
?><br><?php
echo mult(3, 5); // 15
?><br><?php
echo divide(3, 5); // 0.6
?><br><?php
echo divide(3, 0); // На ноль делить нельзя
?><br><?php


/*
 * 4. Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
$operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием
операции. В зависимости от переданного значения операции выполните одну из
арифметических операций (используйте функции из пункта 4) и верните
полученное значение (используйте switch).
 * */

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            return add($arg1, $arg2);
            break;
        case '-':
            return subtr($arg1, $arg2);
            break;
        case '*':
            return mult($arg1, $arg2);
            break;
        case '/':
            return divide($arg1, $arg2);
            break;
        default:
            echo 'Операция не определена';
            return null;
            break;
    }

}

?><br><br><?php

echo mathOperation(3, 7, '+'); // 10
?><br><?php

echo mathOperation(3, 0, '/'); // На ноль делить нельзя
?><br><?php

echo mathOperation(3, 6, '/'); // 0.5
?><br><?php

echo mathOperation(8, 9, '*'); // 72
?><br><?php

echo mathOperation(8, 9, '-'); // -1
?><br><?php

echo mathOperation(8, 9, ''); // -1
?><br><br><?php



/*
 * Продвинутый блок
 *
5. С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
function power($val, $pow), где $val – заданное число, $pow – степень.
 * */

function power($val, $pow) {

    $pow = (int)$pow;

    if (0 == $val) {
        return 0;
    }

    if (0 == $pow) {
        return 0;
    } elseif (1 == $pow) {
        return $val;
    } elseif (-1 == $pow) {
        return 1/$val;
    } elseif (0 < $pow) {
        return power($val, $pow - 1) * $val;
    } elseif (0 > $pow) {
        return power($val, $pow + 1) / $val;
    }
}

echo power(5, 2); // 25
?><br><?php
echo power(2, 10); // 1024
?><br><?php
echo power(10, -10); // 1.0E-10
?><br><?php
echo power(2, -5); // 0.03125
?><br><br><?php


/*
 * 6. Напишите функцию, которая вычисляет текущее время и возвращает его в формате
с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
итд.
Подсказка: часы и минуты можно узнать с помощью встроенной функции PHP –
date.
 * */

function russianHours($h) {

    $h = (int)$h;

    switch ($h) {

        case 1:
        case 21:
            return 'час';
        case 2:
        case 3:
        case 4:
        case 22:
        case 23:
        case 24:
            return 'часа';
        default:
            return 'часов';
    }
}

$h1 = 1;
echo $h1 . ' ' . russianHours($h1);
?><br><?php

$h1 = 5;
echo $h1 . ' ' . russianHours($h1);
?><br><?php

$h1 = 10;
echo $h1 . ' ' . russianHours($h1);
?><br><?php

$h1 = 21;
echo $h1 . ' ' . russianHours($h1);
?><br><?php

$h1 = 24;
echo $h1 . ' ' . russianHours($h1);
?><br><?php

$h1 = 0;
echo $h1 . ' ' . russianHours($h1);
?><br><br><?php

function russianMinutes($m) {

    $m = (int)$m;

    if (10 < $m && 15 > $m) {
        return 'минут';
    }

    switch ($m % 10) {

        case 1:
            return 'минута';
        case 2:
        case 3:
        case 4:
            return 'минуты';
        default:
            return 'минут';
    }
}


$m1 = 1;
echo $m1 . ' ' . russianMinutes($m1);
?><br><?php

$m1 = 11;
echo $m1 . ' ' . russianMinutes($m1);
?><br><?php

$m1 = 13;
echo $m1 . ' ' . russianMinutes($m1);
?><br><?php

$m1 = 21;
echo $m1 . ' ' . russianMinutes($m1);
?><br><?php

$m1 = 25;
echo $m1 . ' ' . russianMinutes($m1);
?><br><?php

$m1 = 368419;
echo $m1 . ' ' . russianMinutes($m1);
?><br><br><?php

function russianTime($h, $m) {

    $h = (int)$h;
    $m = (int)$m;


    if (
        0 > $h ||
        24 < $h ||
        0 > $m ||
        59 < $h
    ) {
        echo 'Задано неверное значение времени';
        return null;
    }

    return $h . ' ' . russianHours($h) . ' ' . $m . ' ' . russianMinutes($m);
}

$h2 = 34;
$m2 = 368419;
echo russianTime($h2, $m2);
?><br><?php

$h2 = 3;
$m2 = 5;
echo russianTime($h2, $m2);
?><br><?php

$h2 = 34;
$m2 = 59;
echo russianTime($h2, $m2);
?><br><?php

$h2 = 12;
$m2 = 0;
echo russianTime($h2, $m2);
?><br><?php


$h2 = 8;
$m2 = 1;
echo russianTime($h2, $m2);
?><br><?php


$h2 = 4;
$m2 = 3;
echo russianTime($h2, $m2);
?><br><?php


$h2 = 24;
$m2 = 6;
echo russianTime($h2, $m2);
?><br><br><?php

/*
 * date — Форматирует вывод системной даты/времени

string date ( string $format [, int $timestamp = time() ] )
Возвращает строку, отформатированную в соответствии с указанным шаблоном format.
Используется метка времени, заданная аргументом timestamp, или текущее системное время, если timestamp не задан.
Таким образом, timestamp является необязательным и по умолчанию равен значению, возвращаемому функцией time().*/

echo russianTime(date('H'), date('i') );
?><br><br><?php


//