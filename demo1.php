<html>
<head><title>This is my first webpage</title></head>
<body bgcolor = "orange"
<p>This HTML will get delivered as is</p>
<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>";
	
	$j = 2;
	$k = 4;
	$num1 = 6; //value of num1
	$num2 = 4; //value of num2
	$sum = $num1 + $num2; //addition
	$username = "John Dale"; //value of username
	echo $username; //This will display the username
	$count = 17; //value of count
	echo "<br>";
	echo "<br>";
	echo $count; //This will display the count
	echo "<br>";
	echo "<br>";
	echo "6+4 = $sum"; //This will display the output of 6+4
	echo "<br>";
	echo "<br>";
	echo "My Name is ".$username; //To display My name is John Dale
	echo "<br>";
	echo "<br>";
	$pi = "3.1416"; //value of pi
	$radius = 5; //value of radius
	echo $pi*($radius*$radius); //To display area of circle
	echo "<br>";
	echo "<br>";
	echo $j;
	echo "<br>";
	echo "<br>";
	echo $k;
	/*if ($j==$k) dolunch();*/
	echo "<br>";
	echo "<br>";
	if($j===$k)
	{
			echo "Identical in terms of data type";
	}
	else{
			echo "They are not indentical";
	}
	
//This is the snippet for php code
?>

</body>
</html>