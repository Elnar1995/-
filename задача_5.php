<?php

/*Вам нужно создать массив и заполнить его случайными числами от 1 до 100. 
Далее, вычислить произведение тех элементов, которые больше ноля и у которых четные индексы. 
После вывести на экран элементы, которые больше ноля и у которых нечетный индекс.
*/

$numbers = array();

for ($i = 0; $i < 100; $i++)
    $numbers[] = rand(1, 100);

foreach ($numbers as $key => $evennum) {
    if ($key > 0 && $key % 2 == 0) {
        $sum += $evennum;
    }
}

var_dump($sum);
 
foreach ($numbers as $key => $oddnum) {

    if ($key > 0 && $key % 2 !==0) {
        echo "<br>$oddnum <br>";
    }
}

