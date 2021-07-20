<?php
include ('renderform.php');

require_once ('config.php');

if (isset($_POST['submit'])) {
	if (is_numeric($_POST['counter'])){
		$counter= $_POST['counter'];
		$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
		$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
		$phone = mysqli_real_escape_string($connection, htmlspecialchars($_POST['phone']));
		$eat = mysqli_real_escape_string($connection, htmlspecialchars($_POST['eat']));
		$hangout = mysqli_real_escape_string($connection, htmlspecialchars($_POST['hangout']));

		if ($name == ''){
			$error = "Please fill in required fields";

			renderform($counter, $name, $email, $phone, $eat, $hangout, $error);
		} else {
			$result = mysqli_query($connection, "UPDATE contacts SET name='$name', email='$email', phone='$phone', eat='$eat', hangout='$hangout' WHERE counter='$counter'");

			if ($result){
				echo "success";
			}
			else{
				die("query failed");
			}

			header("Location: ../visitors.php");	
		}
	} else{
		echo "Error";
	}
} else{
	if (isset($_GET['counter']) && is_numeric($_GET['counter']) && $_GET['counter'] >0 ) {
		$counter = $_GET['counter'];
		$result = mysqli_query($connection, "SELECT * FROM contacts WHERE counter=$counter");
		$row = mysqli_fetch_array($result);

		if($row){
			$name = $row['name'];
			$email = $row['email'];
			$phone = $row['phone'];
			$eat = $row['eat'];
			$hangout = $row['hangout'];

			renderForm($counter, $name, $email, $phone, $eat, $hangout, '');
		} else {
			echo "No results!";
		}
	} else {
		echo "Error";
	}
}
?>