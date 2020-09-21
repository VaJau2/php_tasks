<?php
/*
Работа светофора запрограммирована таким образом: с начала каждого часа, в течении трех минут горит зеленый сигнал, 
следующие две минуты горит красный, дальше в течении трех минут - зеленый и т. д. Вам нужно разработать программу, которая по введенному числу 
определяла какого цвета сейчас горит сигнал. 
*/

$time = 42;


echo "minutes count = {$time} <br/>";
$red = false;
$counter = 2;
$min = 1;
$max = $min + $counter;
$output = false;

if($time > $max) {
    echo "<br/>----output hours count--- <br/>";
    echo "<br/>1 - 3 = green <br/>";
    $output = true;
}

while($time > $max) {
    $min = $max + 1;
    $max += $counter;
    $red = !$red;

    ($counter == 2) ? $counter = 3 : $counter = 2;

    if($red) {
        echo "{$min} - {$max} = red <br/>";
    }
    else {
        echo "{$min} - {$max} = green <br/>";
    }
}

if ($output) {
    echo "<br/>------------------------------ <br/>";
}

if ($red) {
    echo "> red";
}
else {
    echo "> green";
}


/* output:
minutes count = 42

----output hours count---

1 - 3 = green
4 - 5 = red
6 - 8 = green
9 - 10 = red
11 - 13 = green
14 - 15 = red
16 - 18 = green
19 - 20 = red
21 - 23 = green
24 - 25 = red
26 - 28 = green
29 - 30 = red
31 - 33 = green
34 - 35 = red
36 - 38 = green
39 - 40 = red
41 - 43 = green

------------------------------
> green
*/
?>