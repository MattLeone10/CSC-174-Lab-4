<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Records</title>
</head>
<body>
<?php
// connect to the database
include('config.php');

// get results from database
$result = mysqli_query($connection, "SELECT * FROM contacts");
?>

<table border>
  <tr>
    <th>counter</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Favorite Place to Eat</th>
    <th>Favorite Hangout</th>
    <th colspan="2"><em>functions</em></th>
  </tr>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
  <tr>
    <td><?php echo $row['counter']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['eat']; ?></td>
    <td><?php echo $row['hangout']; ?></td>
    <td><a href="update.php?counter=<?php echo $row['counter']; ?>">Edit</a></td>
    <td><a onclick="return confirm('Are you sure you want to delete counter: <?php echo $row["counter"]; ?>?')" href="delete.php?counter=<?php echo $row['counter']; ?>">Delete</a></td>
  </tr>
<?php
// close the loop
}
?>
</table>

<div>
  <br>
	<a href="insert.php">Add a new record</a>
</div>
</body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>