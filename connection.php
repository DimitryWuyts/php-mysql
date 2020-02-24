<?php

function openConnection()
{
// Try to figure out what these should be for you
$dbhost = "localhost";
$dbuser = "dimitry";
$dbpass = "azerty";
$db = "becode";

// Try to understand what happens here
$pdo = new PDO('mysql:host=' . $dbhost .';dbname=' . $db, $dbuser, $dbpass);
return $pdo; }