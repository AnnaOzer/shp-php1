<?php

// массив в старом синтаксисе до php 5.3 включительно
$a = array(1, 2, 3);

// массив в новом синтаксисе от php 5.4
$a = [1, 2, 3];

// ключи массива нигде не задавали, поэтому элементы нумеруются числами, с нуля
echo $a[0]; // 1
echo $a[1]; // 2

// нигде не вводили длину массива - массивы имеют динамическую длину
var_dump($a); // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }

// добавить элемент в массив - для всех версий php
$a[] = 4; // получит первый свободный числовой индекс
var_dump($a); // array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) }

// как задать самим индекс
$a[10] = 4; // элементу массива с индексом 10 присвоить значение 4
// в массиве 5 элементов, один из них с индексом 10
var_dump($a); // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [10]=> int(4) }

// обратиться к элементу массива по индексу
$a[5] = 10;
$a[5] = 5;
var_dump($a);  // array(6) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [10]=> int(4) [5]=> int(5) }
// номера индексов не идут подряд

// удаление элементов массива - оператор unset(...)
unset($a[5]);
var_dump($a); // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [10]=> int(4) }

// индекс - это не порядковый номер в массиве, это просто некая метка, которую мы задаём элементу,
// чтобы быстро его по этой метке найти