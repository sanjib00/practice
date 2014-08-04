<?php

$oddSum = 0;
$evenSum = 0;
for($i=1;$i<=50;$i++)
{	
	if($i%2 == 1)
	{
		echo ($i);
		$oddSum +=$i;

	}

	else{

		echo $i;
		$evenSum +=$i;	

	}
	
}

echo "<br/> The sum of Odd Number is ".($oddSum)."<br/>";
echo "Even Sum is ". $evenSum;


?>