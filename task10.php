<?php 
/*
Игральным картам присвоены следующие порядковые номера в зависимости от их достоинства: "валет" - 11, "дама" - 12, "король" - 13, "туз" - 14. 
Порядковые номера остальных карт соответствуют их названиям("семерка", "восмерка" и т. д.). 
Вам нужно разработать программу, которая выводила достоинство карты по заданному номеру, который будет вводит пользователь.
*/

$inputNumber = 11;


$aNames = [
    6 => "шестерка",
    7 => "семерка",
    8 => "восьмерка",
    9 => "девятка",
    10 => "десятка",
    11 => "валет",
    12 => "дама",
    13 => "король",
    14 => "туз",
];

if ($inputNumber > 5 && $inputNumber < 15) {
    echo "{$inputNumber} name is \"" .$aNames[$inputNumber]. "\"";
}
else {
    echo "input number is out of range (6..14)";
}


/* output:
11 name is "валет"
*/
?>