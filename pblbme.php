<!DOCTYPE html>
<html>
<head>
	<title>BME interfacing webpage</title>
	<script>
		let out_num = 0;

		function changenum()
		{
			const xhttp = new XMLHttpRequest();
			xhttp.onload = function ()
			{
				let numchar = this.responseText;
				let in_num = parseFloat(numchar);
				out_num = out_num + in_num;
				document.write(typeof numchar);
				document.getElementById("demo").innerHTML = out_num.toString();
			}
		xhttp.open("GET", "bme.php");
		xhttp.send();

		}
	</script>
</head>
<body>
//	<?php
//		$raw = exec('./bme280/bme280');
//		$cooked = json_decode($raw);
//		echo $cooked->temperature;
//		echo json_encode($cooked->temperature);
//	?>
	</br>
	<div id="demo">
	<h2>Number</h2>
	</div>
	<button type="button" onclick="changenum()";>Change!</button>
</body>
</html>
