<!DOCTYPE>
<html>
<head>
</head>
<body>
<form action="" method="post">
	<input type="text" name="event_name" placeholder="event name">
	<input type="text" name="venue" placeholder="venue">
	<input type="date" name="date" placeholder="date">
	<input type="submit" name="create" value="Create" id="create">
	</form>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_manager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['create'])) 
{
$event_name=$_POST['event_name'];
$venue=$_POST['venue'];
$date=$_POST['date'];

$sql = "INSERT INTO events(event,event_name,venue,date)
VALUES ('cultural','$event_name','$venue','$date')";

if ($conn->query($sql) === TRUE) {
	echo "New Event Created";
	
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
