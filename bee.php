<?php
$arr = ['d' => ['f', 'e' ],'a' => ['c', 'b'] ];

$replace = ['a' => ['b','c'], 'd' => ['e', 'f']];

asort($array);
foreach ($array as $key => &$values) {
  sort($values);
}
print_r($array);

/*ksort($arr);

sort ($arr['a']);
sort ($arr['d']);
*/
	
?>