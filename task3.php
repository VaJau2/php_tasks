<?php 
/* Разработайте программу, которая из чисел 20 .. 45 
находила те, которые делятся на 5 и найдите сумму этих чисел. 
Рекомендую использовать функцию fmod для определения "делится число" или "не делится".
*/

$sum = 0;


$min = 20;
$max = 45;

for($i = $min; $i < $max; $i++) {
    if (fmod($i, 5) == 0) {
        $sum += $i;
    }
}

echo "Sum of numbers between {$min} and {$max} that are fmod(5) is = {$sum}";


/* output:
Sum of numbers between 20 and 45 that are fmod(5) is = 150
*/
?>