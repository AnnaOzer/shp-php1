<?php

// массив нельзя передать в куку напрямую

// setcookie('data', [1,2,3], time()+ 86400);
/*
Warning: setcookie() expects parameter 2 to be string,
array given in C:\OpenServer\domains\shp-php1-double\lesson5\cookieArray.php on line 3
* */

/*
 * браузер сохраняет в куки один килобайт по стандарту
 * поэтому не следует в куки записывать много данных
 * */

setcookie('data', serialize([1,2,3]), time()+ 86400);
?><br><?php

var_dump($_COOKIE);
/* возвращает сериализованную строку
  * array(2) { ["login"]=> string(5) "vasya" ["data"]=> string(30) "a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}" }
  * */

?><br><?php

// обратная функция, строку раскодирует
var_dump(unserialize($_COOKIE['data'])); // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }