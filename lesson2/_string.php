<?php
/*
00000000
00000001
00000010
...
11111111

256 разных комбинаций позволяют закодировать 256 разных символов,
можно принять договорённость

26 больших, 26 маленьких букв, 10 цифр, значки

договоренность о том, какая битовая коибинация какому символу соответствует - кодировка

далее - многобитные кодировки
стандарт UTF-8 - все известые человечеству символы
UTF-16 каждый символ минимум 2 байта, "ширина слова" и быстрее строковые операции

php рассматривает все строки как набор байт
 */
$a = 'abc'; // 3 байта
$b = 'abcПРИВЕТ'; // неизвестно сколько байт

/*РЕЦЕПТЫ
1) Редактор с поддержкой UTF-8
PHPStorm, Notepad++
2) В браузере
Настройки - Дополнительно - Кодировка UTF-8
 * */