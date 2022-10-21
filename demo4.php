<html>
<head>
<title> My Looping Statements </title>
</head>

<?php

$fuel = 10;
//using while loop statement
while($fuel >1)
{
	echo "There's enough fuel <br>"; // break; for 1 iteration
	--$fuel;
} 
echo "<br>";

do 
{
	echo "There's enough fuel". $fuel. "<br>";
}

while (--$fuel >=1);
echo "<br>";

$count = 1;
do
	echo "$count times 12 is: :". $count*12 . "<br>";
while(++$count <=12); 
echo "<br>";

 //using for loop statement
for($fuel=10; $fuel>=1; --$fuel)
{
	echo "There's enough fuel". "<br>";
}
echo "<br>";

$colors = array ("red", "green", "blue");

foreach ($colors as $value)
echo $value. "<br>";
echo "<br>";

for ($x = 1; $x < 10; $x++) 
{
  if ($x == 4) 
  {
	echo "The number is: $x <br>";
    break;
  }
}
echo "<br>";

for($x=1;$x<10;++$x)
{	if($x==4)
	{
		continue;
	}
	echo" The number is: $x"." <br>";
}
echo "<br>";

//Application 1
echo "APPLICATION 1 <br>";
//using for loop statement
for ($x = 0; $x < 11; $x++) 
{
  if ($x == 11) 
  {
    break;
  }
  echo "Hello $x <br>";
}
echo "<br>";

//Application 2
echo "APPLICATION 2 <br>";
$int = 3;
//using while loop statement
while($int < 10) 
{
  echo " $int <br>";
  $int++;
}

?>

</html>