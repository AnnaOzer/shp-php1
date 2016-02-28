<?php

// обработка параметров формы

// проверка наличия элемента в массиве
var_dump(
    isset($_POST['login'])
);


// проверка на 1) наличие и 2)пустоту - равенство нулю, пустому массиву, пустой строке
var_dump(
    empty($_POST['login'])
);

?><br><br><?php

if(empty($_POST['famname'])) {
    echo 'Фамилия не может быть пустой';
} else {
    echo 'Привет, ' . $_POST['famname'] . ' ' . $_POST['name'];
}

?>

<form action="isset_empty.php" method="post">
    Фамилия*: <input type="text" name="famname" value="<?php echo $_POST['famname']?>"><br>
    Имя: <input type="text" name="name">

    <input type="submit">
</form>
