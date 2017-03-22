<?php

$note_text = $_POST["Note"];

echo $note_text; 

require 'pdo.php';

$new_note = $pdo->prepare("INSERT INTO brittany VALUES (NULL, '$note_text')");
$new_note->execute();

$user_notes = $find_notes->fetchAll(PDO::FETCH_ASSOC);
var_dump($user_notes);



?>

