<?php
session_start();

       if(isset($_POST['username']))
            $_SESSION['username']=$_POST['username'];

       if(isset($_POST['password']))
            $_SESSION['password']=$_POST['password'];



$user = $_SESSION['username'];
$password = $_SESSION['password'];


$loggedIn = false;
//var_dump($_SESSION);
//echo $password;

require 'pdo.php';

	if(($_POST["Note"])){
	$note_text = $_POST["Note"];
	$new_note = $pdo->prepare("INSERT INTO notes (user, note) VALUES (?, ?)");
	$new_note->execute(array("$user", "$note_text"));
	header('Refresh: 0');
}

if($password === $userPw){
	$loggedIn = true;
	var_dump($_SESSION);
	include 'notes.php';
		foreach ($user_notes as $row) {
		echo $row["note"] . "<br/>";
	}

	


	



	




} else {
	include 'incorrect.html';
}




?>





