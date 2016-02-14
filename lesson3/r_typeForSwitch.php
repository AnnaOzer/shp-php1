<?php


// в switch проходить по числу или строке

function checker($m) {
    switch($m) {
        // после case идет очень ограничивающее значение, строка '01', надо писать шире, 1
        case '01': // надо писать case 1:   - потому что при приведении к числу всякие варианты приведутся к 1
            echo 'Единица';
            break;
        default:
            echo 'Ничего';
            break;
    }
}
// хотя на php 5.6 такой код работает ожидаемо

echo checker(1); // Единица

echo checker('01'); // Единица

echo checker('1'); // Единица

// вообще же сравнение сработает в обе стороны, но надо делать код проще
