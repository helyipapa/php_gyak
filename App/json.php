<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss@2.0.0/simple-v1.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

//["kulcs" => "érték", "kulcs2" => "érték2", ...]
$termekek = [
    [
        "id" => 1,
        "nev" => "monitor",
        "ar" => 100000,
        "kesztelen" => true
    ],
    [
        "id" => 2,
        "nev" => "billentyuzet",
        "ar" => 1000000,
        "kesztelen" => false
    ]
];

foreach ($termekek as $termek)
{
    echo "{$termek['id']} - {$termek['nev']} - {$termek['ar']} - {$termek['kesztelen']}<br>";
}
//PHP tömb konvertálása json-né
$json_termékek = json_encode($termekek, JSON_PRETTY_PRINT);
echo "<h2>JSON formátum</h2>";
echo "<pre>$json_termékek</pre>";

$dekodolt_termekek = json_decode($json_termékek, true);

foreach ($dekodolt_termekek as $termek)
{
    echo "{$termek['id']} - {$termek['nev']} - {$termek['ar']} - {$termek['kesztelen']}<br>";
}


?>