<!DOCTYPE html>
<html>
<head>
	<title>Lab 7 PHP file</title>
</head>
<body>
	<p>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "gui";
		$dbname	= "KITTYCAT";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(!$conn){
			die("Connection failed :( " . mysqli_connect_error());
		}

		$namecat = htmlspecialchars($_POST["namecat"]);
		$nameowner = htmlspecialchars($_POST["nameowner"]);
		$nameowner = htmlspecialchars($_POST["fire"]);
		$nameowner = htmlspecialchars($_POST["earth"]);
		$nameowner = htmlspecialchars($_POST["air"]);
		$nameowner = htmlspecialchars($_POST["catweight"]);
		$nameowner = htmlspecialchars($_POST["catspeed"]);
		$sql = ";";
		$result = mysqli_query($conn, $sql);

	?>
	</p>
</body>
</html>
