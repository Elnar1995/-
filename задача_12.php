<?php
//Вычислить квадраты чисел
//Дано натуральное число n. Вычислить: 1 + 2 + .. + nn. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел. 
?>

<form method="post">
    <label>Число:</label>
    <input type="text" name="num">
    <input type="submit" value="Вычислить квадрат">
</form>

<?php

$n = ($_POST["num"]);

/*$s = 0;

$n_ = 1;

$eq_s = '';

while ($n_ <= $n) {

    $s += pow($n_, $n_);

    $eq_s .= "$n_^$n_" . ($n_ < $n ? ' + ' : '');

    $n_++;
}

echo "$eq_s = $s";

*/# 1^1 + 2^2 + 3^3 + 4^4 + 5^5 + 6^6 + 7^7 + 8^8 + 9^9 + 10^10 = 10 405 071 317

for ($i = 0; $i < $n; $i++) {
    $k = pow($i,$i);
    echo "$k" . "<br>";
}




/*$sum = 0;
$s = 11;
for ($i = 0; $i < $n; $i++ )
{ 
$k = pow($s, 2);
echo '$s is ' . $s . '<br>';
echo ' $k is ' . $k . '<br>';
$s *= 2;
$sum += $k;
}
echo 'Сумма всех квадратов: ' . $sum;
*/


?>