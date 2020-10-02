<?php
/*
Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. 
Например: цифра 5 в числе 442158755745 встречается 4 раза
*/

$iNumber = 52346823346;
$iDigit = 3;


if (is_int($iNumber) && is_int($iDigit)) {
    $aDigits = str_split($iNumber);
    $iCount = count(array_keys($aDigits, $iDigit));

    echo "count of {$iDigit} in {$iNumber} is {$iCount}";
}
else {
    echo "> numbers are not numeric";
}


/* output:
count of 3 in 52346823346 is 3
*/
?>