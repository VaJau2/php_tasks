<?php
/*
Составить программу, которая бы по заданному числу выводила его название по китайском календаре. Заданное число не может быть меньше 1924. 
*/

$inputYear = 2004;


if ($inputYear > 1924) {

    echo "{$inputYear} is year of ";
    switch( intval(($inputYear%100)%12) ) {
        case 0:  echo "rat";     break;
        case 1:  echo "ox";      break;
        case 2:  echo "tiger";   break;
        case 3:  echo "rabbit";  break;
        case 4:  echo "dragon";  break;
        case 5:  echo "snake";   break;
        case 6:  echo "horse";   break;
        case 7:  echo "sheep";   break;
        case 8:  echo "ape";     break;
        case 9:  echo "rooster"; break;
        case 10: echo "dog";     break;
        default: echo "swine";   break;
    }
}
else {
    echo "{$inputYear} is out of range (1924 .. )";
}


/*output
2004 is year of dragon
*/
?>