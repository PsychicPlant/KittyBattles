# KittyBattles
Fundamentals Of Webservers Website Class of 2022

We were required to **fetch data asynchronously** from a measuring device and display it on a **locally hosted website**.
I decided to go one step *further* and make a **minigame** out of it using nothing but **PHP/HTML and JS**.

The website was being hosted locally on a **Raspberry PI 4b** running Mint Linux, by an **Apache** webserver.
The user input is stored in a locally hosted **SQL database**, through the server **Mariadb**.
The measuring device was a **BME280**.

The BME280 is **a combined digital altitude, pressure and temperature sensor** based on proven sensing principles. Its small dimensions and its low power consumption allow the implementation in battery driven devices such as handsets, GPS modules or watches.

To use the BME280's sensors, we utilized an open source Git project which communicated with the device and returned **JSON-encoded values** for their sensors with 3 decimal point accuracy.

# Description

The user is prompted to register a new fighter. This fighter will have elemental attributes defined by the user through an HTML form.

Since the decimal point accuracy is so precise on the sensor readings, the decimal values from them are constantly changing due to the sensor not being in a stable environment.
I use this property to extract these pseudo-random variations and use them as scalars to determine damage dealt to the other fighter in a turn-base fashion.

Altitude is a scalar for the Air attribute.
Temperature is a scalar for the Fire attribute.
Pressure is a scalar for the Earth attribute.

They take turns damaging eachother until one comes out victorious!
