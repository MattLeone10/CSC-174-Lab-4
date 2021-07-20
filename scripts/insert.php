<?php
include ('renderform.php');

include ('config.php');

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
	$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
	$phone = mysqli_real_escape_string($connection, htmlspecialchars($_POST['phone']));
	$eat = mysqli_real_escape_string($connection, htmlspecialchars($_POST['eat']));
	$hangout = mysqli_real_escape_string($connection, htmlspecialchars($_POST['hangout']));

	if ($name == ''){
		$error = "Please fill in required fields";

		renderForm($counter, $name,$error);
	} else {
		$result = mysqli_query($connection, "INSERT INTO contacts (name, email, phone, eat, hangout) VALUES ('$name','$email','$phone','$eat','$hangout')");

		header("Location: visitors.php");
	}
} else {
	renderForm('','','','','','','');
}
?>