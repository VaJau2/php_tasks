<?php
/*
Вашим заданием будет создание сокращенного варианта ФИО.
Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.
*/

$fio = "Иванов Иван Петрович";


$splitted_fio = explode(" ", $fio);

$splitted_fio[1] = substr($splitted_fio[1], 0, 2) .'.';;
$splitted_fio[2] = substr($splitted_fio[2], 0, 2) .'.';;

foreach($splitted_fio as $name_part) {
    echo $name_part . " ";
}


/* output:
Иванов И. П. 
*/
?>