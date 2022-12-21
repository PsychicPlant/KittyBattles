let temp = 0;
let pres = 0;
let alt = 0;
let debug_div = 0;
let fire = 0
let earth = 0;
let air = 0;

function capture()
{
	const xhttp = new XMLHttpRequest();
	xhttp.onload = function ()
	{
		let response = JSON.parse(this.responseText);
		temp = response.temperature;
		pres = response.pressure;
		alt = response.altitude;
		cal_attributes();
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
	debug_div.innerHTML = "</br><h4>Statistics<h4>\
			</br>Temperature = "+temp+"\
			</br>Altitude = "+alt+"\
			</br>Pressure = "+pres+"\
			</br></br><h4>Attributes<h4>\
			</br>Fire = "+fire+"\
			</br>Earth = "+earth+"\
			</br>Air = "+air+"";
	return 0;
}

function cal_attributes()
{
	fire = 10+Math.ceil((temp*1000))%100;
	earth= 10+Math.ceil((pres*1000))%100;
	air = 10+Math.abs(Math.ceil((alt*1000))%100);
}

function xreading(str)
{
	pstring = str.replace(/[^a-zA-Z0-9.]/g, '');
	return pstring
}
