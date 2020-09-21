<?php 
/*
Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
По желанию можете сделать проверку на корректность введения данных пользователем.
*/

$number = 4221;


echo "number is - {$number}","<br/>";

if (isset($number) && is_numeric($number)) {
    
    settype($number, "string");
    $summ = 0;
    
    for($i = 0; $i < strlen($number); $i++) {
        $num_part = intval($number[$i]);
        $summ += $num_part;
    }

    echo "> count of the digits of number is - {$summ}";
}
else {
    echo "> number is not numeric"; 
}


/* output:
number is - 4221
> count of the digits of number is - 9
*/
?>