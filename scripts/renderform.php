<?php
function renderForm($counter, $name, $email, $phone, $eat, $hangout, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Add or Edit an entry</title>
</head>
<body>
<?php
if ($error != ''){
	echo '<div '.$error.'</div>';
}
?>
	<form method="post" action="">
		<input type="hidden" name="counter" value="<?php echo $counter;?>">
		<h2>Contact Information</h2>
		<p>Give us your information so we can send you our newsletter!</p>
		<label for="name"> Write down your name:</label> <input type="text" name="name" id="name" value="<?php echo $name;?>"><br>
		<label for="email"> Email:</label> <input type="text" name="email" id="email" value="<?php echo $email;?>"><br>
		<label for="phone"> Phone:</label> <input type="text" name="phone" id="phone" value="<?php echo $phone;?>"><br>
		<br>

		<h2>Favorite Place to eat in Ridgewood</h2>
		<p>What is your favorite place to eat in ridgewood?</p>
		<label for="eat"> Write down the location:</label> <input type="text" name="eat" id="eat" value="<?php echo $eat;?>"><br>

		<h2>Favorite Place to hang out in Ridgewood</h2>
		<p>Where is your favorite place to hang out in ridgewood?</p>
		<label for="hangout"> Write down the location:</label> <input type="text" name="hangout" id="hangout" value="<?php echo $eat;?>"><br>

		<input type="submit" name="submit" value="Submit">
	</form>
	<div>
		<br>
		<a href="visitors.php">Cancel</a>
	</div>
	<body>
	</html>
<?php 
}
?>