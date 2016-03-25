<?php

function dbCred()
{
    return [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'dbname' => 'shp-php1-8',
    ];
}

function dbInit() {

    $cred = dbCred();
    $res = mysql_connect($cred['host'], $cred['user'], $cred['pass']);
    if (!$res) {
        return false;
    }
    $res = mysql_select_db($cred['dbname']);
    return $res;
}

function dbQuery($sql) {

    dbInit();
    $res = mysql_query($sql);

    // обработка ошибок
    if (false === $res) {
        return false;
    }

    // пройтись по результату
    $ret=[];
    while ($row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }
    return $ret;
}

function dbExec($sql) {

    dbInit();
    $res = mysql_query($sql);

    // обработка ошибок
    if (false === $res) {
        return false;
    }

    return true;
}