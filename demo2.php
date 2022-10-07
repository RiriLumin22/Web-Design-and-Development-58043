<html>
<head><title>My Web Page</title></head>

<?php

//Declare Variables
$content = "Welcome to PHP Programming";
$a = 5;
$_msg = 'Hello, again!';
$x = 8;
$y = 8;

echo $content;
echo"<br>".$a;
echo"<br>";
echo $_msg;
//Arithmetic operations
echo"<br>"; 
echo $x+$y;
echo"<br>";
echo $x-$y;
echo"<br>"; 
echo $x*$y;
echo"<br>";
echo $x/$y; 
echo "<br>".$x%$y; 
echo"<br>"; 
echo $x**$y; 
//Comparison operations
echo"<br>"; 
echo"<br>"; 
if($x===$y)
{
		echo "They are identical";
}
else
{
		echo "They are not identical";
}
echo"<br>";
//Increment/decrement operators
//for loop 
echo"<br>";
echo"For loop:";
for ($a=5;$a>=1; $a--)
{
		echo "<br>".$a;
}
echo"<br>";
//while loop 
echo"<br>";
echo "While loop:";
echo"<br>";

$b =5;
while($b>=1)
{
		echo "The number is: $b \n";
		echo"<br>";
		$b-=1;    //$b= $b-1
}

echo"<br>";
//do while loop
echo "Do while loop:";
	$c = 5;
do
{
		echo "<br>The number is:".$c;
		$c--;
}
	while ($c >= 1);
?>

</html>