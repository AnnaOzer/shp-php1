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
    mysql_connect($cred['host'], $cred['user'], $cred['pass']);
    mysql_select_db($cred['dbname']);
}