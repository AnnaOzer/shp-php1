<?php

// авторизация на сайте

// 2. Проверить, что то, что пришло от пользователя, является корректным логином и паролем

function checkLoginPassword($login, $password) {

    // 1. Создать массив с логинами и паролями
    $users = ['Ivan'=>'123', 'Petr'=>'456', 'Vasily'=>'789',];

    // 2.1. Проверка на наличие $login в качестве клюся массива $users
    if (!isset($users[$login])) {
        return false;
    }

    // 3. проверка на совпадение пароля пользователя с тем, который есть у нас

    if ($password != $users[$login]) {
        return false;
    }

    // после того, как все проверки прошли, возвращаем true

    return true;
}

// 4. Проверки функции checkLoginPassword - протестировали функцию
/*
var_dump( checkLoginPassword('foo', '12131654') );  // неверный логин, вернет bool(false), ожидаемо
var_dump( checkLoginPassword('Ivan', '123123485') ); // верный логин и неверный пароль, вернет bool(false), ожидаемо
var_dump( checkLoginPassword('Ivan', '123') ); // верный логин, верный пароль, вернет bool(true), ожидаемо
*/

// 5. Функция авторизации

function login($login) {

    $_SESSION['user'] = $login;
    setcookie('user', $login, time() + 86400); // реализацию скрываем внутрь в функциях

}

function logout()
{
    unset($_SESSION['user']);
}

// 7. Приём данных от пользователя

if (!empty($_POST)) {
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
    }
}

if (!empty($_POST)) {
    if (!empty($_POST['out'])) {
        $logout = true;
    }
}


// 6. Бизнес-логика

// если логин и пароль прошли проверку, авторизовать этого пользователя
if (checkLoginPassword($login, $password)) {
    login($login);
}

if ($logout) {
    logout();
}
?>
<html>
<body>
<form action="r_authorization.php" method="post">
    Логин: <input type="text" name="login"><br><br>
    Пароль: <input type="password" name="password"><br><br>
    <input type="submit" name="in" value="Вход">&nbsp;<input type="submit" name="out" value="Выход">
</form>

<?php
    // показать инфо о пользователе
    if(isset($_SESSION['user'])) {
        echo 'Вы зашли на сайт под именем ' . $_SESSION['user'];
    } else {
        echo 'Добро пожаловать, гость!';
    }

?>


</body>
</html>
