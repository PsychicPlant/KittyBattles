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

		$fighter_id = htmlspecialchars($_GET["id"]);
		$sql = "delete from kitties where id = '$fighter_id';";
		$result = mysqli_query($conn, $sql);
	?>
	</p>
	<script>window.open("/kittybattle.php", "_self");</script>
</body>
</html>
