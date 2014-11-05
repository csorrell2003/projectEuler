<?php
/*
The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?
*/

function factor($n){
$i=1;
while ($i *$i <= $n)
{ 

	// the %modulus operator can not handle numbers larger than 2^32. in this case bcmod() was the way to go
	if (bcmod($n, $i) == 0)
	{
		$n = $n / $i;
		echo $i . "<br>";
	}
	//We can skip even iterations knowing that they won't be prime
	$i = $i +2; 
}
return $n;
}

$n = 600851475143;
echo factor($n);
echo "<br>";
?>
