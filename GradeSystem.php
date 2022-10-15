<html>
	<head> 
			<title> Grading System </title>
	</head>
	
	<body>
		
		<?php
		$grade = "65";
		if($grade >= "70")
		{
			echo "Congrats, You passed.";
		}elseif($grade <= "69" && $grade>= "60")
		{
			echo "Tke remedials";
		}else
		{
			echo "Sorry, You failed";
		}
		?>
		
	</body>
	
	
</html>
