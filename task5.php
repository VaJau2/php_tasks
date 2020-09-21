<?php 
/*
Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). Далее, вычислить произведение тех элементов, 
которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
(прим. парный = четный (кто-то очень постарался при переводе сайта))
*/


$array = [];
$array_count = 6;
$min = 1;
$max = 100;

$even_count = 1;
$not_even_array = [];

for($i = 0; $i < $array_count; $i++) {
    $array[$i] = rand($min, $max);

    if ($array[$i] % 2 == 0) {
        $even_count *= $array[$i];
    }
    else {
        $not_even_array[] = $array[$i];
    }
}

echo "array: ";
var_dump($array);
echo "<br/>";

if ($even_count == 1) {
    echo "> there are no even numbers <br/>";
}
else {
    echo "> product of even numbers = {$even_count} <br/>";
}

if ($not_even_array) {
    echo "> array of not_even numbers: ";
    var_dump($not_even_array);
}
else {
    echo "> there are no not_even numbers";
}


/* output:
array: array(6) { [0]=> int(88) [1]=> int(48) [2]=> int(83) [3]=> int(61) [4]=> int(81) [5]=> int(64) }
> product of even numbers = 270336
> array of not_even numbers: array(3) { [0]=> int(83) [1]=> int(61) [2]=> int(81) } 
*/
?>