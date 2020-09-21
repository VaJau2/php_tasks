<?php
/*
Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. 
Например: цифра 5 в числе 442158755745 встречается 4 раза
*/

$number = 52346823346;
$digit = 3;


if (isset($number) && is_numeric($number) && is_numeric($digit)) {
    
    settype($number, "string");
    $count = 0;

    for($i = 0; $i < strlen($number); $i++) {
        $num_part = intval($number[$i]);
        if($num_part == $digit) {
            $count++;
        }
    }
    echo "count of {$digit} in {$number} is {$count}";
}
else {
    echo "> numbers are not numeric";
}


/* output:
count of 3 in 52346823346 is 3
*/
?>