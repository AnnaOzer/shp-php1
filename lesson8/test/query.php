<?php

require  '../model.php';
assert([
        ['id'=>1, 'name'=>'foo'],
        ['id'=>2, 'name'=>'bar'],
    ]
    ==
    dbQuery('SELECT * FROM `example`'));
?>
TEST PASSED