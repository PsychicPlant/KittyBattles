<!DOCTYPE html>
<html>
<head>
	<title>Lab 7 PHP file</title>
</head>
<body>
	<p>
	<?php
		$servername = "localhost";
		$username = "php";
		$password = "password";
		$dbname	= "KITTYCAT";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(!$conn){
			die("Connection failed :( " . mysqli_connect_error());
		}

		$fighter = htmlspecialchars($_POST["fighters"]);
		$fate = htmlspecialchars($_POST["select_fate"]);
		$sql = "select "$option" from kitties where id="$fighter$";";
		$result = mysqli_query($conn, $sql);

		
	?>
	</p>
</body>
</html>
