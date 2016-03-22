<?php

$config = include __DIR__ . '/dz7configDb.php';

function connectDb($config) {
    return mysql_connect($config['db']['host'], $config['db']['user'], $config['db']['password']);
}

function selectDb($config) {
    if (connectDb($config)) {
        return mysql_selectdb($config['db']['dbname']);
    }
    return false;
}

function getAllImages($config) {
    if (selectDb($config)) {
        if ($res = mysql_query('SELECT * FROM `images`')) {
            $imagesArray = [];
            while ($row = mysql_fetch_assoc($res)) {
                $imagesArray[]=$row;
            }
            return $imagesArray;
        }
    }
    return [];
}

function addImage($newImage, $config) {
    if (selectDb($config)) {

        return mysql_query('INSERT INTO `images`(`file`, `descr`) VALUES (\'' . $newImage['file'] .'\', \''. $newImage['descr'] .'\')');
    }
    return false;
}