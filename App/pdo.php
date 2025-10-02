<link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
<?php
/*
READ:-SELECT name,email from cards where id=10;
CREATE:INSERT INTO CARDS (name,email) VALUE("Tibi","tibi@mzsrk.hu");
UDPATE: UPDATE cards set email="tibi2025@mzsrk.hu" where id=10;
-DELETE:DElETE from card Where id=10;
Creata Database businesscards;
use businesscards;

create table cards(
    id Int unsigned primary key auto_increment,
    name Varchar(100) not NUll,
    companyname Varchar(100) default NUll,
    phoneVarchar(20) default NUll,
    email Varchar(100) default NUll,
    photoVarchar(20) default NUll,
    statusVarchar(20) default NUll,
    note text 
) Engine=InnoDB default charset=utf8mb4 COLLATE=utf8mb4_hungarian_ci;
 */
$dsn='mysql:host=localhost;dbname=businesscards;charset=utf8';
$user='root';
$pass='';
try {
    $pdo=new PDO($dsn,$user,$pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "sikeres kapcs";

    //xss:védekezés: htmlspecialchars()
    //xss($pdo);
    //sql_injection

    checked_insert($pdo);
    prepared_statement($pdo);
    //sql_injection($pdo);
} catch (PDOException $ex) {
    echo "Kapcs hiba: {$ex->Getmessage()}";
}

function xss($pdo){
$name="milan hack";
$companyName=htmlspecialchars("<script>alert(\"hacked\")</script>");
$phone="063062054104";
$email="valami@valami.com";
$photo=null;
$note="valamideaznagyon";
$sql ="INSERT INTO cards (name,`companyName`,phone,email,photo,note) values('$name','$companyName','$phone','$email','$photo','$note')";

$pdo->exec($sql);

//read
$sql="SELECT * FROM cards where name= 'milan hack'";
$result = $pdo->query($sql);
$card = $result->fetch(PDO::FETCH_ASSOC);
echo "<br>";
print_r($card);


}

function sql_injection($pdo){
$name_i="'OR' '1'='1"; // tamado kod
$sql="SELECT * FROM cards where name= '$name_i'";
$result = $pdo->query($sql);
$card = $result->fetch(PDO::FETCH_ASSOC);
echo "<br>";
print_r($card);


}
function prepared_statement($pdo){
$name_i="'OR' '1'='1"; // tamado kod
$sql="SELECT * FROM cards where name= ?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$name_i]);

$card = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<br>";
print_r($card);

}
function checked_insert($pdo){
    $name_i=htmlspecialchars("'OR' '1'='1"); 
    $companyName=htmlspecialchars("<script>alert(\"hacked\")</script>");
    $phone=htmlspecialchars("063062054104");
    $email=htmlspecialchars("valami@valami.com");
    $photo=null;
    $note=htmlspecialchars("valamideaznagyon");

    $sql ="INSERT INTO cards (name,`companyName`,phone,email,photo,note) values('$name','$companyName','$phone','$email','$photo','$note') VALUES (?,?,?,?,?,?)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$name_i,$companyName,$phone,$email,$photo,$note]);

}

/*
$companyName=htmlspecialchars("<script>alert(\"hacked\")</script>");
$phone="063062054104";
$email="valami@valami.com";
$photo=null;
$note="valamideaznagyon";
$sql ="INSERT INTO cards (name,`companyName`,phone,email,photo,note) values('$name','$companyName','$phone','$email','$photo','$note')";
$pdo->exec($sql);
*/
?>