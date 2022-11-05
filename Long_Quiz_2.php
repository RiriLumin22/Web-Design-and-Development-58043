<html>
<head>
<title> Long Quiz 2 </title>
</head>
<body bgcolor = "yellow" align = "center">
<h1>Long Quiz 2</h1>
<h2>Problem 1</h2>

<?php

//Calculate for the net pay for 15 days with a salary of 600 per day, 30% tax included 
$Salary_rate = 600;
$Salary = $Salary_rate*15;
$Taxable_amount = $Salary*0.3;
$Net_pay = $Salary-$Taxable_amount;

echo "Net Pay in 15 days with 30% tax: <br> <br>";
echo "Salary Rate Per Day = ". $Salary_rate;
echo "<br>";
echo "Salary in 15 days = ". $Salary_rate*15;
echo "<br>";
echo "Taxable Amount = ".  $Salary*0.3;
echo "<br>";
echo "Net Pay (Tax Included) = ". $Salary-$Taxable_amount;
?>

<h2>Problem 2</h2>
<?php
$maxint = 50;
$i = 1;
$sum = 0;

//sum of positive integers from 1 to 50
//using while loop statement
while($i <= $maxint) 
	{
		$sum += $i;
		$i++;
	}

		echo "Sum of all positive integers from 1-50 = $sum";
?>

</body>
</html>