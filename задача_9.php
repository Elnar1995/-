<?
//Проверить високосный ли год
//Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год).


?>
<form method="post">
    Введите год для проверки на високосность: <br>
    <input type="number" name="year"><br>
    <input type="submit" name="submit" value="Отправить"><br>
</form>



<?php

// год является високосным в двух случаях: либо он кратен 4, но при этом не кратен 100,
//либо кратен 400. Год не является високосным, если он не кратен 4, либо он кратен 100, но при этом не кратен 400.
$year = ($_POST["year"]);

if ($year % 4 == 0 && $year % 100 !== 0 || $year % 400 == 0) {
    # Год високосный
    echo 'Год високосный';
} elseif ($year % 4 !== 0 || $year % 100 == 0 && $year % 400 !== 0) {
    # Год не високосный
    echo 'Год не високосный';
} else {
    echo "ошибка!";
}





































?>