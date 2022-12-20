<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		$raw = exec('./bme280/bme280');
		$cooked = json_decode($raw);
		echo json_encode($cooked->temperature);
	?>
</body>
</html>
