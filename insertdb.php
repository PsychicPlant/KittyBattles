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
		$catfire = htmlspecialchars($_POST["fire"]);
		$catearth = htmlspecialchars($_POST["earth"]);
		$catair = htmlspecialchars($_POST["air"]);
		$catweight = htmlspecialchars($_POST["catweight"]);
		$catspeed = htmlspecialchars($_POST["catspeed"]);
		$sql = "insert into kitties (kittynames, kittyowners, kittyweights, kittyfire, kittyearth, kittyair, kittyspeed) values ('$namecat', '$nameowner', '$catweight', '$catfire', '$catearth', '$catair', '$catspeed');";
		$result = mysqli_query($conn, $sql);
	?>
	</p>
	<script>window.open("kittybattles.php","_self");</script>
</body>
</html>
