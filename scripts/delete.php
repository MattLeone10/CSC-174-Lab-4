<?php

include ('config.php');

if (isset($_GET['counter']) && is_numeric($_GET['counter'])){
	$counter = $_GET['counter'];

	$result = mysqli_query($connection, "DELETE FROM contacts WHERE counter=$counter");

	header("Location: ../visitors.php");
} else {
	header("Location: ../visitors.php");
}