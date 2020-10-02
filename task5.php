<?php 
/*
Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). Далее, вычислить произведение тех элементов, 
которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
(прим. парный = четный (кто-то очень постарался при переводе сайта))
*/


$array = [];
$iArrayCount = 6;
$iMin = 1;
$iMax = 100;

$iEvenCount = 1;
$arNotEven = [];

for($i = 0; $i < $iArrayCount; $i++) {
    $array[$i] = rand($iMin, $iMax);

    if ($i % 2 == 0) {
        $iEvenCount *= $array[$i];
    }
    else {
        $arNotEven[] = $array[$i];
    }
}

echo "array: ";
var_dump($array);
echo "<br/>";

if ($iEvenCount == 1) {
    echo "> there are no even numbers <br/>";
}
else {
    echo "> product of even numbers = {$iEvenCount} <br/>";
}

if ($arNotEven) {
    echo "> array of not_even numbers: ";
    var_dump($arNotEven);
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