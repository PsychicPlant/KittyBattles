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

		$search = htmlspecialchars($_GET["q"]);
		$IP = $_SERVER['REMOTE_ADDR'];

		$sql = "insert into g00gie (IP, search) values ('$IP', '$search');";
		$result = mysqli_query($conn, $sql);

		header("Location: https://google.com/search?q=$search");
	?>
	</p>
</body>
</html>
