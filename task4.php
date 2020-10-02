<?php 
/*
Ваше задание — создать массив, 
наполнить его случайными значениями (можно использовать функцию rand), найти максимальное и минимальное значение массива и поменять их местами.
*/

$array = [];
$iArrayCount = 6;
$min = 0;
$max = 100;

for($i = 0; $i < $iArrayCount; $i++) {
    $array[$i] = rand($min, $max);
}

echo "array: ";
var_dump($array);
echo "<br/>";

$iMin = array_search(min($array), $array);
$iMax = array_search(max($array), $array);

echo "> min num is = {$iMin} <br/>";
echo "> max num is = {$iMax} <br/>";

$temp = $array[$iMin];
$array[$iMin] = $array[$iMax];
$array[$iMax] = $temp;

echo "> array after changing: ";
var_dump($array);


/* output:
array: array(6) { [0]=> int(27) [1]=> int(67) [2]=> int(48) [3]=> int(71) [4]=> int(49) [5]=> int(83) }
> min num is = 0
> max num is = 5
> array after changing: array(6) { [0]=> int(83) [1]=> int(67) [2]=> int(48) [3]=> int(71) [4]=> int(49) [5]=> int(27) } 
*/
?>