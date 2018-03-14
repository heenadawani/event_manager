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
			if(isset($_POST['submit1'])) 
			{
			$name=$_POST['username'];
			$pass=$_POST['password'];

			$sql = "INSERT INTO register (username,password)
			VALUES ('$name','$pass')";

			if ($conn->query($sql) === TRUE) {
				echo "Now login to continue...";
				
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}
if(isset($_POST['submit2']))
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$sql="Select * from signin where name='$name'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		header('Location: firstpage.php');
	}
	else
	{
		echo "Kindly first register";
	}
}
$conn->close();
?>