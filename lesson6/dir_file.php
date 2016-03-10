<?php

// магическая константа __DIR__ всегда соддержит путь в файловой системе до папки, где находится наш скрипт

echo __DIR__; // C:\OpenServer\domains\shp-php1-double\lesson6

// магическая константа __FILE__ всегда соддержит полный путь в файловой системе до файла, который сейчас исполняется

echo __FILE__; // C:\OpenServer\domains\shp-php1-double\lesson6\dir_file.php

// открыть файл, находящийся в той же папке, что и мы

$res = fopen(__DIR__ . '/2.txt', 'r');

var_dump($res); // resource(3) of type (stream)

// можно и прямой, и обратный слеш, ошибки не будет  - \ в Windows, / в *nix

$res3 = fopen(__DIR__ . '\3.txt', 'r');

var_dump($res3); // resource(4) of type (stream)



