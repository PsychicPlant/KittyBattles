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

		$sql = "select * from kitties;";
		$result = mysqli_query($conn, $sql);

		foreach($result as $row){
			echo "id: {$row["id"]} | name: {$row["kittynames"]} | weight: {$row["kittyweights"]} owners: {$row["kittyowners"]} <br/>";
		}
	?>
	</p>
</body>
</html>
