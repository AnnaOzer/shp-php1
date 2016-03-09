<?php
/*
 * Создайте механизм авторизации ("входа на сайт").
Главная страница должна выглядеть по-разному для авторизованных пользователей и гостей:
- гостям показывается форма авторизации,
- авторизованным - выводится информация о их профиле.
Предусмотрите также возможность "выхода" с сайта.
 * */

$salt = 'fbmcks';

// список зарегистрированных пользователей

$users = [
    'Peter' => sha1($salt . '357'),
    'Maxim' => sha1($salt . '135'),
];

// определение роли пользователя

$role = 0; // пользователь по умолчанию неавторизованный и не пытавшийся авторизоваться
$role_title = [
    0 => 'Гость',
    1 => 'Зарегистрированный пользователь',
];

// обработка входа в систему

$err_message = ''; // сообщение об ошибке

if (!empty($_SESSION)) {
    if (!empty($_SESSION['logged'])) {
        $role = 1;
    }
} else {
    if (!empty($_POST)) {
        if (!empty($_POST['login'])
        && !empty($_POST['password'])) {
            if(array_key_exists($_POST['login'], $users)) {
                if (sha1($salt . $_POST['password']) == $users[$_POST['login']]) {

                    $_SESSION['logged'] = $_POST['login'];

                    $role = 1;

                    // установка куки
                    if (isset($_POST['rem'])) {

                        setcookie('login', sha1($salt . $_POST['login']), time() + 86400);
                        setcookie('lastvisit', time(), time() + 60*60*24*365*5);
                    }


                } else {
                    $err_message = 'Неверный пароль';
                    $role = 0;
                }
            } else {
                $err_message = 'Неверный логин';
                $role = 0;
            }
        }
    } else {
        $role = 0;
    }
}

// обработка выхода из системы

if (!empty($_POST['out'])) {

    // если пользователь просит его забыть, ставим куку задним числом
    if (!empty($_POST['forget'])){
        setcookie('login', sha1($salt . $_POST['login']), time() - 60*60*24);
        setcookie('lastvisit', time(), time() - 60*60*24);
    }

    unset( $_SESSION['logged'] );
    $role = 0;

}


// вывод главной страницы

switch ($role) {
    case 1: // зарегистрированный залогиненный пользователь
        ?>
        <div>
            <h1><?php echo $role_title[$role]; ?></h1>
            <p>Вы вошли в систему под именем <?php echo $_SESSION['logged']; ?></p>
            <?php if(isset($_COOKIE['lastvisit'])) : ?>
                Время предыдущего посещения:  <?php echo date('l jS \of F Y h:i:s A', $_COOKIE['lastvisit']); ?>
            <?php endif; ?>

            <form action="dz5.php" method="post">
                Забыть меня: <input type="checkbox" name="forget"><br><br>
                <input type="submit" value="Выйти" style="background-color: rosybrown" name="out"><br><br>
            </form>
        </div>
        <?php
        break;
    case 0: // гость
        ?>
        <div>

            <h1><?php echo $role_title[$role]; ?></h1>
            <p style="color: darkred;"><?php echo $err_message; ?></p>
            <form action="dz5.php" method="post">
                Логин: <input type="text" name="login"><br><br>
                Пароль: <input type="password" name="password"><br><br>
                Запомнить меня: <input type="checkbox" name="rem" checked><br><br>
                <input type="submit" value="ВОЙТИ"><br><br>
            </form>
        </div>
        <?php
        break;
}


/*
 * (PHP 4 >= 4.0.7, PHP 5, PHP 7)
array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс

bool array_key_exists ( mixed $key , array $array )
Функция array_key_exists() возвращает TRUE, если в массиве присутствует указанный ключ key. Параметр key может быть любым значением, которое подходит для индекса массива.

key
Проверяемое значение

array
Массив с проверяемыми ключами

Возвращает TRUE в случае успешного завершения или FALSE в случае возникновения ошибки.
 * */