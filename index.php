<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Php test</title>
    </head>
    <body>
    <form action="" method="post">
    <input type = 'number' name='num1'><br>
    <input type = 'number' name='num2'><br>
    <input type="submit" value="send">
</form>
    </body>
</html>


<?php
/*Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же
это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите
слово "Ошибка"*/

 if ($_POST['num1'] > 50) {
 echo $b=pow($_POST['num1'],2);
 }
 elseif ($_POST['num1'] > 10 & $_POST['num1'] < 30) {
 echo 0;
 }
 else {
 echo "Ошибка";

}



?>