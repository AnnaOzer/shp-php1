<?php

$a = [
    'foo' => 1,
    'bar' => 'foo',
    'baz' => true,
];

// цикл будет пробегать по _всем_ элементам массива $a
// каждое значение элемента будет копироваться в переменную $val
// на каждом шаге в переменной $val будет новое значение
// внутри цикла в $val вы можете записывать любые значения, на следующем шаге они всё равно сотрутся
// переменные не локальные

foreach ($a as $val) {
    echo $val; // и это значенеи мы выводим
    ?><br><?php
}
/* выводит
1
foo
1
* */

// второй синтаксис foreach: получить еще и ключ
foreach ($a as $key => $val) {
    echo $key . ': ' . $val; // выводим ключ: значение
    ?><br><?php
}
/* выводит
foo: 1
bar: foo
baz: 1
* */

// foreach будет пробегать элементы массива в порядке из добавления в массив, не в порядке индексов
// позже добавленный элемент будет всегда последним
// вложенные элементв проходить не будет, для вложенных элементов использовать вложенный цикл
// внутри по $val еще пустить foreach
