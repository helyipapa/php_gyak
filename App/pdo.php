<?php
/*
crud: create Read UPDATE Delete
tfh: van egy cards táblám amiben van name,email,id mező.
backtick `
1. mysql
-READ: select name,email form cards WHERE id=1;
-CREATE: insert into cards (`city name`,`email`) values ('Tibi','tibi@mzsrk.hu');
-UPDATE: update cards set email='tibi2025@mzsrk.hu' where id=1;
-DELETE: delete from cards where id=1;
*/

CREATE DATABASE businesscards;

use businesscards;

CREATE table cards(
    `id` int unsigned primary key auto_increment,
    `name` varchar(100) not null,
    `companyName` varchar(100) default null ,
    `phone` varchar(20) default null ,
    `email` varchar(100) default null ,
    `photo` varchar(255) default null ,
    `status` varchar(10) default null,
    `note` text default null
) engine=InnoDB default charset=utf8mb4 collate utf8mb4_hungarian_ci;

$dsn = 'mysql:host=localhost;dbname=businesscards;charset=utf8'
$user = 'root';
$pass = '';

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sikeres csatlakozás";
}
catch(PDOException $ex)
{
    echo "Hiba történt: {$ex->getMessage()}";
}
?>