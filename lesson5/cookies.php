<?php
/**
 * Проблема: HTTP - протокол без состояния
 * Решение: Cookies
 *
 * небольшой текстовый файл
 * сохраняется на компьютере пользователя
 * хранит в себе пары ключ=значение
 * может быть создан по команде с сервера
 * может быть прочитан на сервере
 *
 * Где применяется: поле логин, поле пароль, галочка запомнить меня
 * в тот момент, когда сайт решил, что вы это вы, логин пароль совпали
 * галочка запомнить меня стоит
 * в этот момент сайт может поставить вам метку, кУку
 * о том что вы это вы, чтобы вас своеобразно пометить
 *
 * - у каждого браузера своё хранилище этих маленьких текстовых файлов (где-то в папке tmp, у каждого браузера в своём месте)
 * (авторизовавшись в хроме, в фаерфоксе вы будете гостем по прежнему)
 * - куки различных сайтов изолированы друг от друга по соображениям безопасности
 * - можно изолировать куки разных частей сайта (например закрытая и открытая часть сайта)
 * (можно ставить куки на все поддомены данного домена)
 * - для каждой куки задается время жизни, после которого она становится недействительной
 * (например, считаем пользователя авторизованным в течение 15 минут после ввода логина-пароля)
 *
 * Рекламные инструменты чаще всего не по кукам работают, там есть другие механизмы
 *
 * можно считать, что в 99% случаев браузер куку примет и меточку создаст
 *
 * У сессий есть обходные пути на случай, если браузер пользователя куки не принимает
 *
 * У заголовка куки есть параметры:
 * - домен (.example.com если перед доменом точка, кука будет доступна для всех поддоменов)
 * - путь (слеш / означает для всего сайта в целом)
 * - имя
 * - значение
 * - время жизни
 *
 */

/* Средство для работы с cookie в php
 *
 * setcookie($name, $value, $time);
 * $name  имя
 * $value  значение
 * $time  время ДО которого кука будет действительна (время в формате UNIX TIME, число секунд с 1 января 1970)
 *
 * функция time() возвращает текущую дату в формате UNIX TIME
 * */


setcookie('login', 'vasya', time() + 86400); // F12, вкладка Network
/*
 * первый запуск скрипта: в списке responce headers видим set-cookie
 * второй запуск скрипта: в списке request headers видим cookie
 * */

var_dump($_COOKIE); // array(1) { ["login"]=> string(5) "vasya" }

/*
 * в реальности такие простые слова вроде vasya не используются
 * используются в простейшем случае хеш-функции
 * */

/*
 * посмотреть куки в браузере
 * F12 Resources Cookies
 * */

/*
 * Как посмотреть на стороне сервера, что кука поставлена
 *
 * проверить через isset наличие в $_COOKIE элемента под ключиком, под которым сохраняли

 * */

?><br><?php

if(isset($_COOKIE['login'])) {
    $user = $_COOKIE['login'];
    echo 'Привет, ' . $user;
} else {
    echo 'Привет, дружище!';
}
/*
 * Нельзя просто доблавить значения в масcив $_COOKIE потому что это ни к чему не приведет
 * */


?><br><?php

var_dump( time() ); // int(1457273944)