<!DOCTYPE html>
<html>
<head>
	<title>BME interfacing webpage</title>
	<script>
		function changenum()
		{
			const xhttp = new XMLHttpRequest();
			xhttp.onload = function ()
			{
				let response = JSON.parse(this.responseText);
				let out_num = response.temperature;
				document.getElementById("demo").innerHTML = out_num.toString();
			}
		xhttp.open("GET", "bme.php");
		xhttp.send();

		}

		function xreading(str)
		{
			pstring = str.replace(/[^a-zA-Z0-9.]/g, '');
			return pstring
		}

	</script>
</head>
<body>
	</br>
	<div id="demo">
	<h2>Number</h2>
	</div>
	</br>
	<button type="button" onclick="changenum()";>Change!</button>
</body>
</html>
