<!DOCTYPE html>
<html>
<style>
	table, th, td {border:1px solid black;}
</style>
<head>
	<title>Lab 7 PHP file</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "gui";
		$dbname	= "KITTYCAT";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if(!$conn){
			die("Connection failed :( " . mysqli_connect_error());
		}

		$sql = "select * from kitties;";
		$result = mysqli_query($conn, $sql);
		echo "\n<h3>As it stands, these are the gladiators of today's brawl:</h3>";
		echo "<p align='justify'>";
		echo "<table style='width:100%'>";
		echo "<tr> <th>ID</th> <th>Kitty</th> <th>Master</th> <th>Weight</th>
		 <th>Fire Affinity</th> <th>Earth Affinity</th>
		 <th>Air Affinity</th> <th>Velocity</th> </tr>";
		foreach($result as $row){
			echo "<tr> <td>{$row['id']}</td> <td>{$row['kittynames']}</td> <td>{$row['kittyowners']}</td>
			 <td>{$row['kittyweights']}</td> <td>{$row['kittyfire']}</td>
			 <td>{$row['kittyearth']}</td> <td>{$row['kittyair']}</td>
			 <td>{$row['kittyspeed']}</td></tr>";
		}
		echo "</table>";
		echo "</p>";
	?>
	<form action="lab7_pform.php" method="post">
	<?php
		echo "\n\n<h2>Now, choose the destiny of those fighters:</h2>\n\n";
		echo "<input type='radio' id=1 name='select_fate' value=1 required>
		      <label for='select_fate'>Add/Modify a fighter</label>\n";
		echo "<input type='radio' id=2 name='select_fate' value=2>
		      <label for='select_fate'>Delete a fighter</label></br></br>\n";
		//Radio buttons to decide if the change will be insert or drop
		echo "<label for='fighters'>Select a fighter.</label>\n</br></br>";
		echo "<select id='foghters' name='fighters'>";
		foreach($result as $row)
		{
			echo "<option value={$row['id']}>{$row['kittynames']}</option>";
		}
		echo "</select>";
	?>
	</br></br></br>
	<input type='submit' value='Let there be blood!'/>
	</form>
</body>
</html>
