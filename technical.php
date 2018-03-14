<!DOCTYPE>
<html>
<head>

</head>
<body>
<a href="firstpage.php">Home</a><br>
<h2>Technical</h2>
<?php
"include connect.php";
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

$sql="SELECT * FROM events WHERE event='technical'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "event " . $row["event"];
		echo "event name " . $row["event_name"];
		$event_name=$row["event_name"];
		echo "venue " . $row["venue"];
		$venue=$row["venue"];
		echo "date " . $row["date"];
		$date=$row["date"];
		echo "<form action=\"\" method='post'>";
		echo "<input type='submit' name='".$event_name."' value='Participate'></form>";
		
    }	
} else {
    echo "0 results";
}

if(isset($_POST['$event_name']))
{
	
}
$conn->close();
?>


<?php
"include connect.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_manager";
$name=$_POST['submit2'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['g']))
		{
			$sql="insert into participate (name,event,event_name,venue,date) 
			values ('$name','technical','$event_name','$venue','$date')";
		}
$conn->close();

?>
</body>
</html>


