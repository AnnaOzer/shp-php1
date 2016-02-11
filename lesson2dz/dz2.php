<?php
/*
 * 1. Изучите понятие рекурсия, составьте рекурсивную функцию вычисления чисел Фибоначчи, проверьте её работу.
 * */

function fibo($n) {

    $n = (int)$n; // приведение типа к int

    if ($n<=2) {
        return 1;
    } else {
        return fibo($n - 1) + fibo($n - 2);
    }
}

$n1 = 10;
echo 'Значение ' . $n1 . '-го числа Фибоначчи равно ' . fibo($n1) . '.';

?><br><?php

/*
 * 2. Напишите функцию, которая вычисляет доход по вкладу.
 * В качестве аргумента принимается сумма вклада, срок в месяцах, годовой процент.
 * Возвращается сумма вклада по окончанию срока.
 * */

function profitDeposit($amount, $months, $yearPercent) {

    // $yearPercent в долях единицы, т.е. 12% как 0.12
    $profit = $amount * pow((1 + $yearPercent/12), $months);

    /*
    round — Округляет число типа float
    float round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP ]] )
     * */
    return round($profit, 2);


}

$amount1 = 100;
$months1 = 2;
$yearPercent1 = 0.12;
$valuta = 'руб.';

echo 'При вкладе ' . $amount1 . $valuta .
    ' через ' . $months1 . 'мес. ' .
    ' при процентной ставке ' . $yearPercent1*100 . '%' .
    ' на счете будет ' . profitDeposit($amount1, $months1, $yearPercent1) . $valuta;

?><br><?php


/*
 * 3. Напишите функцию, которая принимает на вход два аргумента - число (1..31) и номер месяца (1..12).
Возвращает правильно свормированную дату на русском языке.
Например: "1 января" или "9 мая".
 * */

function spellMonth($month) {
    switch ($month) {
        case 1:
            return 'января';
            break;
        case 2:
            return 'февраля';
            break;
        case 3:
            return 'марта';
            break;
        case 4:
            return 'апреля';
            break;
        case 5:
            return 'мая';
            break;
        case 6:
            return 'июня';
            break;
        case 7:
            return 'июля';
            break;
        case 8:
            return 'августа';
            break;
        case 9:
            return 'сентября';
            break;
        case 10:
            return 'октября';
            break;
        case 11:
            return 'ноября';
            break;
        case 12:
            return 'декабря';
            break;
        default:
            return $month;
            break;
    }
}


function dateInRussian($day, $month) {

    $day = (int)$day;
    $month = (int)$month;

    /*
     * in_array — Проверяет, присутствует ли в массиве значение
        bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )
        Ищет в haystack значение needle. Если strict не установлен, то при поиске будет использовано нестрогое сравнение.
     * */

    if( 1 > $month
        || 12 < $month
        || 1 > $day
        || 31 < $day
        || ( 30 == $day && in_array($month, [2,4,6,9,11]) )
        || (30 == $day && 2 == $month)
    ){


        echo 'Не существует даты ' . $day . ' ' . spellMonth($month);
        return null;
    } else {
        return $day . ' ' . spellMonth($month);
    }
}

$d = 63;
$m = 7;

echo dateInRussian($d, $m);
?><br><?php


$d1 = 23;
$m1 = 2;
echo dateInRussian($d1, $m1);


?><br><?php

$d2 = 23;
$m2 = 3;
echo dateInRussian($d2, $m2);

?><br><?php

$d3 = 29;
$m3 = 2;
echo dateInRussian($d3, $m3);

?><br><?php

$d4 = 31;
$m4 = 6;
echo dateInRussian($d4, $m4);

?><br><?php

$d5 = 15;
$m5 = 15;
echo dateInRussian($d5, $m5);

//
