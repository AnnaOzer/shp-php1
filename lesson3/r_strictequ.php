<?php

// пример неуместности строго сравнения

function fib($n) {
    if ($n === 0) {
        return 0;
    } elseif ($n === 1) {
        return 1;
    } else {
        return fib($n - 1) + fib($n - 2);
    }
}

echo fib(10); // 55
echo fib('10'); // 55  - тоже нормально работает, хотя Альберт обещал бесконечный цикл здесь