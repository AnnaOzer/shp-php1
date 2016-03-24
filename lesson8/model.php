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

function dbQuery($table, $sql) {

    dbInit();
    $res = mysql_query($sql);

    // обработка ошибок
    if (false === $res) {
        return false;
    }

    // пройттись по результату
    $ret=[];
    while ($row = mysql_fetch_array($res)) {
        $ret[] = $row;
    }
    return $res;
}
