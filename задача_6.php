<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Php test</title>
    </head>
    <body>
    <form action="" method="post">
   Введите имя      <input type = 'text' name='name'><br>
   Введите Фамилию  <input type = 'text' name='second'><br>
   Введите Отчество <input type = 'text' name='patron'><br>
    <p>
    <input type="submit" value="Ввод">
</p>
</form>
    </body>
</html>


<?php
//Вашим заданием будет создание сокращенного варианта ФИО.
//Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.
$name = ($_POST['name']);
$second = ($_POST['second']);
$patron = ($_POST['patron']);

$second = mb_substr($second, 0,1, 'utf-8');
$patron = mb_substr($patron, 0,1, 'utf-8');

echo "$name ";
echo "$second".".";
echo "$patron".".";