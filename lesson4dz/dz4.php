<?php

/*
 * Создайте простейший калькулятор.
Он должен состоять из двух полей для ввода чисел, а между ними
- select для выбора операции.   +  -  *  /
По нажатию на кнопку = должно вычисляться значение выражения.
*/


// массив возможных действий над операндами

$operators = ['+', '-', '*', '/'];

// функция приведения к числу int или float

function toNumber($x) {
    return ( (float)$x == (int)$x ) ? (int)$x : (float)$x;
}

// функция вычисления арифметического выражения

function calculation($a, $b, $operator) {
    switch ($operator) {
        case '+':
            return $a + $b;
            break;
        case '-':
            return $a - $b;
            break;
        case '*':
            return $a * $b;
            break;
        case '/':
            if(0 != $b) {
                return $a / $b;
            } else {
                echo 'На ноль делить нельзя';
                return null;
            }
            break;
        default:
            echo 'Неизвестный оператор';
            return null;
            break;
    }
}


// если не пуст массив $_POST
if(!empty($_POST)) {

    // если не пусты данные об операндах и операторе
    if (!empty($_POST['a'])
    && !empty($_POST['b'])
    && !empty($_POST['op'])
    ){
        // если введено допустимое арифметическое действие
        if( in_array($_POST['op'], $operators) ) {

            // считывание данных об операторе в переменную
            $op = $_POST['op'];

            // считывание данных об операндах в переменные
            $a = toNumber($_POST['a']);
            $b = toNumber($_POST['b']);
        }

    } else {
        // редирект к пустой форме

    }
}

?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="dz4.php" method="post">
            <input type="text" name="a" value="<?php echo $a; ?>">
            <select name="op">
                <?php foreach ($operators as $operator): ?>
                    <option <?php if( isset($op) && $operator == $op ) { echo 'selected="selected"';} ?>>
                        <?php echo $operator; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="b" value="<?php echo $b; ?>">
            <input type="submit" value="=">
            <?php
                if (
                    isset($a)
                    && isset($b)
                    && isset($op)
                ){
                    echo calculation($a, $b, $op);
                }
            ?>
        </form>
    </body>
</html>