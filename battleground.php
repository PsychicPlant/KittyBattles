<!DOCTYPE html>
<html>
<head>
	<title>BME interfacing webpage</title>
	<script type="text/javascript" src="pblbme.js"></script>
</head>
<body>
	</br>
	<div id="demo">
	<h2>Number</h2>
	</div>
	</br>
	<input type="button" onclick="capture();" value="Capture BME280 Data">
	</br>
	</br>
	<input type="checkbox" onclick="showdebug('debug');">Display BME values</button>
	</br>
	<div id="debug" style="display: none;"></div>
	</br>
</body>
</html>
