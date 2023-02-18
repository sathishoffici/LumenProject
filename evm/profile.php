<?php
session_start();

include 'includes/database.php';
if (!isset($_SESSION['loggedin'])){
	header('location:login.php');
	exit();
}
else{
	//get the element from the array 
	$user = getProfile($_SESSION['email']);
}
?>

<!DOCTYPE html>
<html>
<title>Profile Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="css/form.css" rel="stylesheet" />
<link href="css/animate.css" rel="stylesheet" />
<style>
		img{
			width:250px;
			height:250px;
		}
		#logout{
			float: right;
			transform: translateY(-120%);
			z-index: -1;
		}
</style>

	<div class="container">
	<h2 class = "animated fadeInDownBig"> Profile Page</h2>
	<a href = "Logout.php" class ="btn btn-default" id="logout">Logout</a>
	<hr>
	<h3 class = "animated fadeInRight name">Welcome, <?php echo $user['firstname'] . ' ' . $user['lastname'];?></h3>
	<h4 class = "animated fadeInRight email"><?php echo $user['email'];?></h4>
	<hr>
	<a href="book.html"> <button type="button-success">Create Event</button>
	<h3 class = "animated fadeInRight event-header">Events</h3>
	






	<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'assign2';
	
	$conn = mysqli_connect($host, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Select all rows from a table
	$sql = "SELECT * FROM evnt";
	$result = mysqli_query($conn, $sql);
	
	// Display the result
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "Name: " . $row["name"] . "organsor: " . $row["orgdet"] . " date: " . $row["date"]. " location: " . $row["loc"] . "<br>";
			// Replace "id", "name", and "email" with the actual column names in your table
		}
	} else {
		echo "0 results";
	}
	// Close the connection
	mysqli_close($conn);

	?>
	<hr>

</html>