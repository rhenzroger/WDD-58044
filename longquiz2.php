<html>
<body>
<?php
	echo "Problem 1: <br>";
	$salary_rate = 600;
	$salary = 15 * $salary_rate;
	$taxable_amount = 0.30 * $salary;
	$net_pay = $salary - $taxable_amount;

	echo "Salary Rate: ".$salary_rate."/day <br>";
	echo "Salary: " .$salary."<br>";
	echo "Taxable amount: " .$taxable_amount."<br>";
	echo "Net pay: " .$net_pay."<br><br>";

	echo "Problem 2: <br>";
			$sum = 0;
			for($x=1; $x<=50; $x++)
			{
				$sum +=$x;
			}
				echo "positive integers from 1-50 is: ".$sum."<br>";
?>
</body>
</html>