<?php
session_start();

if(isset($_POST['username']))
    $_SESSION['username']=$_POST['username'];
if(isset($_POST['password']))
    $_SESSION['password']=$_POST['password'];

$user = $_SESSION['username'];
$password = $_SESSION['password'];
//stores form submissions into session for continued access

require 'pdo.php';

if(($_POST["Note"])){
	$note_text = $_POST["Note"];
	$new_note = $pdo->prepare("INSERT INTO notes (user, note) VALUES (?, ?)");
	$new_note->execute(array("$user", "$note_text"));
	header('Refresh: 0');
}
//adds note submission to database & refreshes note list

if($user && $password === $userPw){
	include 'notes.php';
		if($user_notes){
			foreach ($user_notes as $row) {
				echo "<div class=\"notes\">" . $row["note"] . "</div>";
			}
		}
		else {
			echo "You don't have any notes yet!";
		}
//prevents logged out users from accessing or entering notes
//displays all user's notes

} else {
	include 'incorrect.html';
}
//sends logged out users or failed user/pw combos to retry login
?>