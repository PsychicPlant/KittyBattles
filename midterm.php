<!DOCTYPE HTML>
<html>
	<head>
		<title>Midterm HTML page</title>

		<?php
		$server = "localhost";
		$username = "root";
		$password = "gui";
		$database = "KITTYCAT";
		$conn = mysqli_connect($server, $username, $password, $database);

		if(!$conn)
		{
			die("Connection failed: {mysqli_connect_error()}");
		}

		$sql = "select * from Products;";
		$result = mysqli_query($conn, $sql);
		?>
	</head>
	<body>
		<h3>SELECT THE PRODUCT TO FETCH INVENTORY:</h3>
		</br>
		<form action="midterm_pform.php" method="post">
		<?php
			foreach($result as $row)
			{
				echo "<input type='radio' id='{$row['product_name']}' name='products' 
				value='{$row['product_name']}'>\n
				<label for={$row['product_name']}>{$row['product_name']}</label></br>";
			}
		mysqli_close($conn);
		?>
		</br>
		<input type='submit' value='Submit!'/>
		</form>
	</body>
</html>

