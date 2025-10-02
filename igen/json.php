<link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
<?php

$termekek = [
    [
        "id" => 1,
        "nev" => "monitor",
        "ar" => 10000,
        "keszleten" => true
    ],
    [
        "id" => 2,
        "nev" => "keyboard",
        "ar" => 100200,
        "keszleten" => false
    ]
];
foreach ($termekek as $termek) {
    echo "A(z) ".$termek["id"]." ID " . $termek["nev"] . " termék ára: " . $termek["ar"] . " Ft<br>";
}
//PHP tömb JSON formátumba alakítása
?>
<h1>JSON formátum</h1>
<?php
$json = json_encode($termekek, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "<pre>$json</pre>";
$dekodolt = json_decode($json, true);
foreach ($dekodolt as $termek) {
    echo "A(z) ".$termek["id"]." ID " . $termek["nev"] . " termék ára: " . $termek["ar"] . " Ft<br>";
}
?>