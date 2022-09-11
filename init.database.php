<?php 

$servername = "localhost";
$username = "pedro";
$password = "CESAE.2022";

//Create connection

$dbh = new PDO("mysql:host=$servername;dbname=sticktoit;", $username, $password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>