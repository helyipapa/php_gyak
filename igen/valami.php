<!--hányszor léptek be az oldalra cookieval-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
    <title>Belépés számláló cookieval</title>
</head>
<body>
    
</body>
</html>
<?php
if (isset($_COOKIE['látogatások'])) 
{
        $látogatások = $_COOKIE['látogatások'] + 1;
}
else 
{
    $látogatások = 1;
}
setcookie('látogatások', $látogatások, time() + 3600 * 24 * 30);
echo "Cookie: Az oldalra $látogatások alkalommal léptél be.";

echo "<br>";
session_start();
if (isset($_SESSION['látogatások'])) {
    $_SESSION['látogatások'] += 1;
} else {
    $_SESSION['látogatások'] = 1;
}
echo "Session: Az oldalra ".$_SESSION['látogatások']." alkalommal léptél be.";
?>
