<?php 
/*
Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год). Число может быть в диапазоне от 1 до 9999.
(прим. проверить високосный ли год)
*/

$year = 2020;


function isYearLeap(int $year): bool
{
    return (bool) date('L', mktime(0, 0, 0, 1, 1, $year));
}


if ($year < 0 || $year > 9999) {
    echo "number {$year} is out of range (0 .. 9999)";
}
else {
    if(isYearLeap($year) == 1) {
        echo "{$year} is leap";
    }
    else {
        echo "{$year} is not leap";
    }
}

/* output:
year 2020 is leap
*/
?>