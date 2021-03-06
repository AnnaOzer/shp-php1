<?php

/* Для чего нужны базы данных

- хранение данных
- бысрый доступ к нужным данным
- сложные операции с данными
 *
 * */

/* Реляционные БД

- все данные хранятся в таблицах
- каждая запись - это строка таблицы
- столбцы таблицы - это поля, поля имеют тип

- данные в таблицах могут быть связаны
- данные в разных таблицах должны быть связаны внешними ключами
 *
 * */

/* в phpmyadmin
 * создать базу данных testshpphp17, сравнение указать utf8-general-ci
 * создать таблицу persons с 3 столбцами
 *      id   serial
 *      department    int
 *      name    varchar(100)
 *
 * вставка данных - в phpmyadmin
 *      INSERT
 *          INTO `persons` (`department`, `name`)
 *          VALUES (1, 'Иванов');
 *      строковые константы в одинарных кавычках
 * вставить 2 записи и на них посмотреть
 *
 * обновление данных
 *      UPDATE persons
 *          SET  name='Пупкин'
 *          WHERE name='Иванов'
 * затронута 1 строка
 *
 *      DELETE from `persons`
 *          WHERE `department`=1
 * удалена 1 строка
 *
 * выборка данных
 *
 * SELECT * FROM `persons`
 * SELECT `department` FROM `persons`
 * SELECT * FROM `persons` WHERE `id`=2
 * SELECT * FROM `persons` ORDER BY `department`
 * SELECT COUNT(*) FROM `persons`
 *  WHERE `department`=1
 *
 * Добавить в таблицу пару записей - Иванов 1 отдел, Сидорова 2 отдел
 * вывести всё,
 * вывести все имена всех людей
 * вывести имена людей, которые служат в 1 отделе
 * вывести все поля для людей, которые работают в 1 отделе
 * вывести все поля для всех людей, осортировав по полю name ORDER BY
 *
 * */

/*
 * Работа с базой данных в php
 *
 * открыть соединение с сервером БД
 * выбрать нужную базу
 * отправить запрос
 * получить ответ
 * преобразовать результат в объекты php
 * */

// соединение с базой данных, проверять что вернуло не фолс
/*
$connection = mysql_connect('localhost', 'root1', ''); // намеренно ввели неверные данные
var_dump($connection);// bool(false)
 */

$connection = mysql_connect('localhost', 'root', '');
var_dump($connection);// resource(3) of type (mysql link)


// выбор нужной бд, проверять что вернуло не фолс
mysql_select_db('testshpphp17');

// отправка запроса к базе
$res = mysql_query('SELECT * FROM `persons`');
var_dump($res); // resource(4) of type (mysql result)

// получить результат запроса из ресурса
/*
mysql_fetch_assoc массив со строковыми ключами
mysql_fetch_row  массив с числовыми ключами
mysql_fetch_array оба варианта
    при каждом своём вызове возвращает очередную запись из результата запроса
    в виде массива
    когда записи кончились вернёт false
* */

while ($row = mysql_fetch_array($res))  {
    echo $row['name']; // ИвановПетровСидорова
}

/* до тех пор пока следующая попытка вызвать mysql_fetch_array не вернёт нам false
 while (false !== $row = mysql_fetch_array($res))  {
    echo $row['name'];
}
 */

// на MySql работает википедия, к слову чтобы понимать масштабы базы данных

/* Альтернатива phpmyadmin
 * EMS MySQL Manager  - планая программа
 */

/* PHP из коробки работает со следующими бд
MySQL
Postgres
SQLite
MSSQL
Oracle
десятка 2 разных БД поддерживается
 * */

// одновременно приложение может работать с несколькими подключениями
// PDO - библиотека, упрощающая соединение с БД

// noSQL очень плохой выбор основнорго хранилища данных для вебприложений
// noSQL для кеширования и некритичных данных
// читать хабр про выбор Монго - плохой выбор
// значимость noSQL решений преувеличена

/* Некоторые другие функции для работы с БД
mysql_num_rows - число строк, содержащееся в результате выборки данных
mysql_affected_rows - число строк, затронутых последним запросом INSERT, UPDATE или DELETE
mysql_error - сообщение о последней ошибке, возникшей в ходе запроса
mysql_insert_id - id записи, добавленной последним запросом INSERT
mysql_close - закрывает соединение с сервером MySQL
 *
 * */