# KittyBattles
Fundamentals Of Webservers Website Class of 2022

We were required to **fetch data asynchronously** from a measuring device and display it on a **locally hosted website**.
I decided to go one step *further* and make a **minigame** out of it using nothing but **PHP/HTML and JS**.

The website was being hosted locally on a **Raspberry PI 4b** running Mint Linux, by an **Apache** webserver.
The measuring device was a **BME280**.

The BME280 is **a combined digital humidity, pressure and temperature sensor** based on proven sensing principles. Its small dimensions and its low power consumption allow the implementation in battery driven devices such as handsets, GPS modules or watches.

To use the BME280's sensors, we utilized an open source Git project which communicated with the device and returned **JSON-encoded values** for their sensors with 3 decimal point accuracy.

# Description



Since the decimal point accuracy is so precise, the decimal values from the readings are constantly changing due to the sensors not being in a stable environment.
I use this property to extract these pseudo-random variations and use them as scalars to determine damage
