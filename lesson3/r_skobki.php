<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 12.02.2016
 * Time: 21:28
 */

$cond = true;

function makeGood() {
    echo 'makeGood';
}

function makeBad() {
    echo 'makeBad';
}


function mailToUser() {
    echo 'mailToUser';
}

// без скобок

if($cond)
    makeGood();
else
    makeBad();
?><br><?php

// добавили одну строчку и код сломался

if($cond)
    makeGood();
else
    mailToUser();
    makeBad();
?><br><?php
// со скобками всё ок

if($cond) {
    makeGood();
} else {
    mailToUser();
    makeBad();
}
?><br><br><?php


// false - со скобками и без скобок работает ожидаемо

$cond = false;

// без скобок

if($cond)
    makeGood();
else
    makeBad();
?><br><?php

// добавили одну строчку и код сломался

if($cond)
    makeGood();
else
    mailToUser();
makeBad();
?><br><?php
// со скобками всё ок

if($cond) {
    makeGood();
} else {
    mailToUser();
    makeBad();
}
?><br><br><?php
//