<?php

require 'init.database.php';

$data = $_POST['selected_note'];



$sth = $dbh->prepare('
    DELETE FROM notes 
    WHERE id_note = :id;    
    ');

$sth->bindParam(':id', $data);


$sth->execute();

header("Location: viewnotes.php");

?>