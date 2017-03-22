<?php

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=notes', 'root', '');
} catch (PDOException $e) {
	die('Could not connect!');
}



$find_pw = $pdo->prepare("SELECT * FROM users WHERE username = '$user'");
$find_pw->execute();
$find_pw_result = $find_pw->fetch(PDO::FETCH_ASSOC);
$userPw = $find_pw_result[password];


$find_notes = $pdo->prepare("SELECT * FROM $user");
$find_notes->execute();
$user_notes = $find_notes->fetchAll(PDO::FETCH_ASSOC);
