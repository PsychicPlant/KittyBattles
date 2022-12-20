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
				let str_in = xreading(numchar);
				let in_num = parseFloat(str_in);
				out_num = out_num + in_num;
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
