<?php 

$user = $_POST["Username"];

setcookie("username", $user);
$username = $_COOKIE["username"];

$password = $_POST["Password"];
$loggedIn = false;


require 'pdo.php';




if($password === $userPw){
	$loggedIn = true;
	include 'notes.php';
	//	foreach ($user_notes as $row) {
	//	echo $row["note"] . "<br/>";
	//}
	


	$note_text = $_POST["Note"];
	var_dump($_COOKIE["username"]);
	echo $username;
	

	if($_POST["Note"]){
	$new_note = $pdo->prepare("INSERT INTO notes (user, note) VALUES (?, ?)");
	$new_note->execute(array("$username", "$note_text"));
	echo $username;
}

} else {
	include 'incorrect.html';
}




?>





