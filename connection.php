<?php

$server = "localhost";
$db = "Login";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password, $db);
if($conn)
{
	echo "Database Connected Successfully.";

}

else
{
	echo "Connection Failed." .mysqli_error($conn);
}

echo "<br>";
echo "<br>";

if(isset($_POST["User"]))
{
	$username = $_POST["User"];
	$password = $_POST["text"];
	
	$sql = "Select * from Users where username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
}	
	if(mysqli_num_rows($result) ==1)
	{
		echo "Login Successful: " .$username;
		exit();
	}
	else
	{
		echo "Login Failed";
		exit();
	}





?>