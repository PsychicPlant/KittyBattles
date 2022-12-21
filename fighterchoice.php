<!DOCTYPE html>
<html>
<body>
	<?php
		$select = htmlspecialchars($_POST["select"]);
		if($select == "1")
		{ echo "<script>window.open('formpage1.html','_self');</script>";}
		else{}
	?>
</body>
</html>
