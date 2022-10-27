<!DOCTYPE HTML>
<html>
	<head>
		<title>Midterm HTML page</title>

		<?php
		$server = "localhost";
		$username = "php";
		$password = "password";
		$database = "KITTYCAT";
		$conn = mysqli_connect($server, $username, $password, $database);

		if(!$conn)
		{
			die("Connection failed: {mysqli_connect_error()}");
		}

		$product_name = htmlspecialchars($_POST["products"]);
		$sql = "select product_name, num_items from Products where product_name='{$product_name}';";
		$result = mysqli_query($conn, $sql);
		?>

		<h3>The following is the inventory status for the selected item:</h3>
		</br>
	</head>
	<body>
		<?php
		foreach($result as $row)
		{
			echo "<p>Number of {$row['product_name']} in stock is: {$row['num_items']}.</p>"; 
		}

		echo "</br>Bonus var_dump!:";
		var_dump($_POST);
		mysqli_close($conn);
		?>

	</body>
</html>
