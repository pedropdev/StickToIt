<?php

require 'init.database.php';

$toReturn = [];

$sth = $dbh->prepare('
    SELECT * from notes;
  ');

$sth->execute();

$sth->setFetchMode(PDO::FETCH_ASSOC);

$toReturn = $sth->fetchAll();


?>