<?php

// авторизация на сайте

// 2. Проверить, что то, что пришло от пользователя, является корректным логином и паролем

function checkLoginPassword($login, $password) {

    // 1. Создать массив с логинами и паролями
    $users = ['Ivan'=>'123', 'Petr'=>'456', 'Vasily'=>'789',];

    // 2.1. Проверка на наличие $login в качестве клюся массива $users
    if (!isset($users[$login])) {
        return false;
    }

    // 3. проверка на совпадение пароля пользователя с тем, который есть у нас

    if ($password != $users[$login]) {
        return false;
    }

    // после того, как все проверки прошли, возвращаем true

    return true;
}

// 4. Проверки функции checkLoginPassword - протестировали функцию

var_dump( checkLoginPassword('foo', '12131654') );  // неверный логин, вернет bool(false), ожидаемо
var_dump( checkLoginPassword('Ivan', '123123485') ); // верный логин и неверный пароль, вернет bool(false), ожидаемо
var_dump( checkLoginPassword('Ivan', '123') ); // верный логин, верный пароль, вернет bool(true), ожидаемо