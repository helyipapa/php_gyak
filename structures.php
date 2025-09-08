<?php
/*
1. if,else,elseif
2. switch
3. Ciklusok:for,while,foreach
4.Ternary operator
5. Tömbök (indexelt,asszociativ,tombok tombje)
*/
// egy szamrol dontse el h az paros e
$number = 7;
if ($number % 2 == 0) 
{
    echo "{$number} egy paros szam";
}
else
{
    echo "{$number} egy paratlan szam";
}
echo "szám.<br>";

$result = ($number % 2 == 0) ?"páros" : "paratlan";
echo"A(z) $number egy $result szám";
?>