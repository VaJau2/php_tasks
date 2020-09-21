<?php
/*
Дано натуральное число n. Вычислить: 1^1 + 2^2 + .. + n^n. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.
*/

$input_num = 4;


echo "input number is {$input_num} <br/> >";
$sum = 0;
for($i = 1; $i < $input_num + 1; $i++) {
    $pow = pow($i, $i);
    echo "{$pow} ";
    $sum += $pow;
}
echo "<br/> > sum = {$sum}";


/* output:
input number is 4
>1 4 27 256
> sum = 288
*/
?>