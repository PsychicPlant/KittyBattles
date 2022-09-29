<!DOCTYPE HTML>
<html>
	<head>
		<title>Lab 5 PHP step 6</title>
	</head>
	<body style="background-image: url('cuh.jpg'); background-repeat: no-repeat; background-size: cover; ">
		<h2>I will now demonstrate my powers of devination!!</h2>
		<h4>Your HTTP User Agent is:</h4> 
		<?= htmlspecialchars($_SERVER["HTTP_USER_AGENT"]); ?>
		<p style="background-image: linear-gradient(red, yellow, red); background-size: cover; background-blend-mode: lighten; ">
		<br>
		<?=var_dump($_POST);?><br>
		And furthermore, i will peer into your mind to discover that:<br><br>
		The number of felines you desire is: <?=htmlspecialchars($_POST["ncat"]);?><br><br>
		Your most precious email is: <?=htmlspecialchars($_POST["email"]);?><br><br>
		I've seen your pet in my dreams, it looks kinda: <?=htmlspecialchars($_POST["tcat"]);?><br><br>
		Of all the beautiful things in this universe, you covet: <?=htmlspecialchars($_POST["like"]);?> the most.
		</p>
	</body>
</html>
