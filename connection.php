<?php

//function openConnection()
//{
//// Try to figure out what these should be for you
//    $dbhost = "DB_HOST";
//$dbuser = "DB_USER";
//$dbpass = "DB_USER_PASSWORD";
//$db = "DB_NAME";
//
//// Try to understand what happens here
//$pdo = new PDO('mysql:host=' . $dbhost . 'example.com'';dbname=' . $db, $dbuser, $dbpass);

$pdo = new PDO('mysql:host=dimitry@localhost;dbname=database', 'dimitry', 'azerty');
$statement = $pdo->query("id");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['id']);
