<?php error_reporting(0); ?>
<?php
//Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в
// выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза 
?>

<form method="POST">

    <div>
       <b>Введите строку:</b> <input input="number" name="num">

    </div>
    <div>
       <b>Найти в нем символы:</b> <input input="number" name="num2">

    </div>
    <input type="submit" value="push">
</form>

<?php

$num = ($_POST["num"]);

$num2 = ($_POST["num2"]);
$number = str_split($num2);
//echo "$number[0]";


if ($num && $num2 != null) {
echo "В строке $num: " . substr_count($num, $num2) . " совпадений с : $num2";
} else {
   echo "Заполните поля чтобы найти совпадения";
}
?>