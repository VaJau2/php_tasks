<?php 
/*
Ваше задание — создать массив, 
наполнить его случайными значениями (можно использовать функцию rand), найти максимальное и минимальное значение массива и поменять их местами.
*/

$array = [];
$array_count = 6;
$min = 0;
$max = 100;

for($i = 0; $i < $array_count; $i++) {
    $array[$i] = rand($min, $max);
}

echo "array: ";
var_dump($array);
echo "<br/>";

$min_i = array_search(min($array), $array);
$max_i = array_search(max($array), $array);

echo "> min num is = {$min_i} <br/>";
echo "> max num is = {$max_i} <br/>";

$temp = $array[$min_i];
$array[$min_i] = $array[$max_i];
$array[$max_i] = $temp;

echo "> array after changing: ";
var_dump($array);


/* output:
array: array(6) { [0]=> int(27) [1]=> int(67) [2]=> int(48) [3]=> int(71) [4]=> int(49) [5]=> int(83) }
> min num is = 0
> max num is = 5
> array after changing: array(6) { [0]=> int(83) [1]=> int(67) [2]=> int(48) [3]=> int(71) [4]=> int(49) [5]=> int(27) } 
*/
?>