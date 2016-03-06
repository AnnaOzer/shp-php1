<?php
    // Элементы задачи о калькуляторе от Альберта

    // 1. Задать допустимые значения для операций
    $availiableOperations = ['+', '-', '*', '/'];

    // 2. Проверка пользовательских данных на корректность
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];

    // 3. Код для получения корректной операции
    $op = in_array($_POST['op'], $availiableOperations)
        ? $_POST['op']
        : $availiableOperations[0];

?>

<!-- 4. Написать заготовки select, внутри них заготовка option -->
<!-- 5. По option пройтись циклом foreach -->

<select name="op">
    <?php foreach ($availiableOperations as $op) : ?>
        <option value="<?=$op; ?>"><?=$op; ?></option>
    <?php endforeach; ?>
</select>

