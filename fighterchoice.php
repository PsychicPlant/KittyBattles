<!DOCTYPE html>
<head
</head>
<html>
<body>
	<?php
		$select = htmlspecialchars($_POST["select"]);
		$fighter_del = htmlspecialchars($_POST["fighters"]);
		if($select == "1")
		{ echo "<script>window.open('formpage1.html','_self');</script>"; }
		else if($select == "2")
		{ echo "<script>window.open('deletedb.php/?id=$fighter_del','_self');</script>"; }
		else if($select == "3")
		{ echo "<script>window.open('battleground.php','_self');</script>"; }
	?>
</body>
</html>
