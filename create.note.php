<?php 

require 'init.database.php';


$data = $_POST['title'];
$cont = $_POST['content'];


if (isset($data)) {

$sth = $dbh->prepare('
INSERT INTO notes (title, content)
VALUES (:title, :content);
');

$sth->bindParam(':title', $data);
$sth->bindParam(':content', $cont);

$sth->execute();

header("Location: viewnotes.php");
}

?>