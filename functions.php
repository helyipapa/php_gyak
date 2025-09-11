<?php
/*
    fgv definiálása,parameterek,visszatérésiérték
*/

//irj egy fgv-t,ami visszaadja ket szam osszeget
function sum(int $a,int $b): int{
    return $a + $b;
}

$s1=sum(5,3);
echo "{$s1} <br>";
$s2 = sum("4","6")
echo $s2;

function sayHello($name="gust")
{
    return "helo $name!"
}

echo sayHello("moszo")
?>