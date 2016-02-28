<?php

// суперглобальный массив $_GET

var_dump($_GET);

// в GET параметрах нет знака $

/*
в запросе /lesson4/get.php
выведет array(0) { }

в запросе /lesson4/get.php?foo=bar
выведет array(1) { ["foo"]=> string(3) "bar" }

в запросе /lesson4/get.php?foo=bar&baz=bla
выведет array(2) { ["foo"]=> string(3) "bar" ["baz"]=> string(3) "bla" }
*/


// все точки в гет параметрах будут заменены на знак подчеркивания

/*
в запросе /lesson4/get.php?foo.bar=baz
выведет array(1) { ["foo_bar"]=> string(3) "baz" }
*/


// в $_GET параметрах можно передавать массив, ключи могут быть числовые и строковые

/*
в запросе /lesson4/get.php?foo[1]=12&foo[2]=34
выведет array(1) { ["foo"]=> array(2) { [1]=> string(2) "12" [2]=> string(2) "34" } }

в запросе /lesson4/get.php?foo[bar]=12&foo[baz]=34
выведет array(1) { ["foo"]=> array(2) { ["bar"]=> string(2) "12" ["baz"]=> string(2) "34" } }

*/