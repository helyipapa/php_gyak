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

//ciklussal irasd ki a szamokat
for ($i=0; $i < 10 ; $i++) { 
    $out = $i +1;
    echo "{$out}<br>";
}

//hozz letre egy indexelt tömböt 5 gyümölcsel és irasd ki
$fruits = ["apple","apricot","banana","orange","plum"];
//$things = array("this","that");

for ($i=0; $i <count($fruits); $i++) { 
    echo "$fruits[$i], ";
}

echo "<br>";
foreach ($fruits as $fruit) {
    echo "$fruit";
}

//hozz létre a user tömböt ami tartalmazza a user nevet és eletkorat

$user =
[
    "Kiss Pista" => 20,
    "Nagy Tibi" => 21,
    "Koós Géza" => 30,
];

echo "<br>";
foreach ($users as $name => $age) {
    echo "$name: $age éves.<br>";
}

//vegyunk fel egy students tombot ami tombok tombje legyen
$students = [
    ["name" => "Kovács Péter","age" => 20],
    ["name" => "Tóth Géza","age" => 21],
    ["name" => "Kiss Ica","age" => 23]
];

foreach ($students as $student) {
    echo "{$student['name']} kora: {$student['age']} év.<br>";
}

//hf:users tomb ami majd lehetove teszi az authetikáciot,foreach el irasd ki
?>