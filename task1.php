<?php 
/*
Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
По желанию можете сделать проверку на корректность введения данных пользователем.
*/

$iNumber = 4221;


echo "number is - {$iNumber}, ";

if (is_int($iNumber)) {
    $iSumm = 0;

    $aDigits = str_split($iNumber);
    $iSumm = array_sum($aDigits);

    echo "count of the digits of number is - {$iSumm}";
}
else {
    echo "number is not numeric"; 
}


/* output:
number is - 4221, count of the digits of number is - 9
*/
?>