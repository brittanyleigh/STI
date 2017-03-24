
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Welcome to Notes!</title>
</head>
<body>

	<div class="welcome">
		<h3>Welcome, <?php echo $user ?>!</h3>

		<form action="logout.php" method="post" class="logout">
    		<input type="submit" name ="logout" value="Log Out" />
		</form>
	</div>

	<div class="new_note">
		<form action="" method="post">
			<textarea name="Note" placeholder="Enter New Note"></textarea>
			<div class="submit">
				<input type="submit" value="Submit" name="submit" />
			</div>
		</form>
	</div>

	<div class="user_notes">
		<h4>Your Notes:</h4>
	</div>

</body>
</html>