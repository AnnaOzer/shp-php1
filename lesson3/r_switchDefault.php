<?php

// в switch нельзя в default писать какую попало последнюю операцию.
// мало ли что вам передадут, ерунду какую-то а вы делите
// надо писать сообщение об ошибке

// это учебный пример, проверка деления на ноль опущена

// неправильно

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "*":
            return $arg1 * $arg2;
            break;
        case "+":
            return $arg1 + $arg2;
            break;
        case "-":
            return $arg1 - $arg2;
            break;
        default:
            return $arg1 / $arg2;
            break;
    }
}

// правильно

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "*":
            return $arg1 * $arg2;
            break;
        case "+":
            return $arg1 + $arg2;
            break;
        case "-":
            return $arg1 - $arg2;
            break;
        case "/":
            return $arg1 / $arg2;
            break;
        default:
            echo "Error!";
            break;
    }
}

// return прерывает выполнение программы и поэтому после него break не обязательно но желательно
// вдруг вы замените return на что-то другое

// тоже правильный вариант

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "*":
            return $arg1 * $arg2;

        case "+":
            return $arg1 + $arg2;

        case "-":
            return $arg1 - $arg2;

        case "/":
            return $arg1 / $arg2;

        default:
            echo "Error!";

    }
}