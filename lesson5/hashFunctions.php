<?php

// хеш функции для хранения пароля на сервере

echo md5('123');
?><br><?php
echo md5('1233');
?><br><?php
echo md5('nevskroesh'.'1233'); // добавлена соль

?><br><br><?php

echo sha1('123');
?><br><?php
echo sha1('1233');
?><br><?php
echo sha1('nevskroesh'.'1233'); // добавлена соль