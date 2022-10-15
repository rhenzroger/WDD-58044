<html>


	<body>
		
		<?php
		
		//Equality
		$month = "December";
		$a = "1000";
		$b = "+1000";
		
		if($a!=$b)
		{
			echo "1";
		}
		
		if($a!==$b)
		{
			echo "2";
		}
		
		//Comparison Operator
		if($a > $b) echo "a is greater than b <br>";
		
		if($a < $b) echo "a is less than b";
		echo "<br>";
		if($a >= $b) echo "a is greater than or equal to b";
		echo "<br>";
		if($a <= $b) echo "a is less than or eqaul to b";
		
		
		//Logical Operators
		echo $a and $b."<br>";
		echo $a or $b. "<br>";
		echo $a xor $b."<br>";
		echo !$a."<br>";
		
		//If Statement
		$bank_balance = "50";
		if($bank_balance<100)
		{
			$money = 1000;
			$bank_balance+=$money;
			echo $bank_balance;
		}
		

		?>
		
	</body>
	
	
</html>