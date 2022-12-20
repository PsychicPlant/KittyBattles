let temp = 0;
let pres = 0;
let alt = 0;
let debug_div = 0;
function capture()
{
	const xhttp = new XMLHttpRequest();
	xhttp.onload = function ()
	{
		let response = JSON.parse(this.responseText);
		temp = response.temperature;
		pres = response.pressure;
		alt = response.altitude;
		updatedebug();
		return response;
	}
xhttp.open("GET", "bme.php");
xhttp.send();

}

function showdebug(p)
{
	debug_div = document.getElementById(p);
	if(debug_div.style.display === "none")
	{debug_div.style.display = "block";}
	else {debug_div.style.display = "none";}

	updatedebug();
	return 0;
}

function updatedebug()
{
	debug_div.innerHTML = "</br>Temperature = "+temp+"</br>Altitude = "+alt+"</br>Pressure = "+pres+"</br>";
	return 0;
}

function xreading(str)
{
	pstring = str.replace(/[^a-zA-Z0-9.]/g, '');
	return pstring
}
