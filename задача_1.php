<?php
//Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
// Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
//По желанию можете сделать проверку на корректность введения данных пользователем. 
?>

<form method="POST">

    <div>
        <input input="number" name="num">

    </div>
    <input type="submit" value="push">
</form>

<?php
$num = ($_POST["num"]);
$number = str_split($num);

$result = array_sum($number);
echo "Результат сложения чисел у $num равен: $result";


$pattern = '#^[0-9]+$#';


 if( preg_match($pattern, $num) ){
  echo "";
 }else{
  echo "<p>Введенные данные <b>$num</b> содержат буквы!</p>";
 }


?>