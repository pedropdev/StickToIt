<?php

require 'init.database.php';

$toReturn = [];

$sth = $dbh->prepare('
    SELECT id_note, title, date_and_time from notes
    ORDER BY date_and_time DESC;
  ');

$sth->execute();

$sth->setFetchMode(PDO::FETCH_ASSOC);

$toReturn = $sth->fetchAll();

?>

