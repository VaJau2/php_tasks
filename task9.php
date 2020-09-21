<?php 
/*
Вам нужно разработать программу, которая проверяла бы введенное пользователем число (год). Число может быть в диапазоне от 1 до 9999.
*/

$year = 2020;

if ($year < 0 || $year > 9999) {
    echo "number {$year} is out of range (0 .. 9999)";
}
else {
    $is_leap = false;

    if($year % 400 == 0) {
        $is_leap = true;
    }
    elseif($year % 100 != 0 && $year % 4 == 0) {
        $is_leap = true;
    }

    if($is_leap) {
        echo "year {$year} is leap";
    }
    else {
        echo "year {$year} is not leap";
    }
}

/* output:
year 2020 is leap
*/
?>