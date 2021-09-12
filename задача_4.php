<?php
// создать массив, наполнить его случайными значениями (можно использовать функцию rand), 
// найти максимальное и минимальное значение массива и поменять их местами.

$arr = range(0,100);shuffle($arr);
echo "<p>Массив:</p>";
print_r($arr);
echo "<br>";

$indexMax = array_search(max($arr), $arr);
$indexMin = array_search(min($arr), $arr);

echo "<br>";
echo "Минимальное значение: $indexMin<br>";
echo "Максимальное значение: $indexMax<br>";

list($arr[$indexMin], $arr[$indexMax]) = [$arr[$indexMax], $arr[$indexMin]];

echo "<br>";
echo "<p>Массив после смены минимального и максимального значения:</p>";
print_r($arr);
