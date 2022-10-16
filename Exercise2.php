<html>
<head>
	<title>Exercise 2</title>
</head>
<body bgcolor = "orange" align = 'center'>

<h1> Student Grade Evaluation
<br>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Please Input the Grade: <input type="number" name="grade">
  <input type="submit">
</form>

<?php
	//Request the submitted data
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			// collect value of grade
			$grade = $_REQUEST['grade'];
			
			if (empty($grade)) // If there is no input
			{
				echo "None. Please input the grade! <br>";
			} 
			
			else // If there is input
			{
			
				if ($grade >= 70) // If grade is greater than or equal to 70
				{
					echo "Inputted Grade: $grade = PASSED!";
				}
				
				else if ($grade >= 60) // If grade is greater than or equal to 60
				{
					echo "Inputted Grade: $grade = REMEDIAL!";
				}
				
				else // Grade is less than 60
				{
					echo "Inputted Grade: $grade = FAILED!";
				}
			}
		}
		

?>
</h1>
</body>
</html>