<?php

/*
 * for (выражение1, выражение2, выражение3)
 * {
 *      операторы
 * }
 *
 * выражение 1  - перед началом цикла просто выполняется, вычисляется, всегда
 * выражение 2  - условие продолжения цикла - любая функция, выражение
 * выражение 3  - всегда в конце всякой итерации цикла
 * */

$n = 10;

// выведет числа от 10 до 1
for($i = $n; $i > 0; $i--) {

    echo $i;
    ?><br><?php

}

?><br><?php

// выведет четные числа от 10 до 0
for($i = $n; $i >= 0; $i-=2) {

    echo $i;
    ?><br><?php

}
?><br><?php

// переменная $i не локальная, в циклах никакой локальности нет
echo $i; // -2