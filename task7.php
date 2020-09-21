<?php
/* 
Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.
*/

$degrees = 90;


if ($degrees < 0 || $degrees > 360) {
    echo "number {$degrees} is out of range (0 .. 360)";
}
else {
    echo "degrees are {$degrees} <br/>";
    $hours = intval($degrees / 15);
    echo "> hours gone {$hours} <br/>";
}


/* output:
degrees are 90
> hours gone 6 
*/
?>