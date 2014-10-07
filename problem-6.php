<?php
/*


The sum of the squares of the first ten natural numbers is,
1^2 + 2^2 + ... + 10^2 = 385

The square of the sum of the first ten natural numbers is,
(1 + 2 + ... + 10)^2 = 552 = 3025

Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.

*/
function calculate($num){
for ($i=1;$i<=$num;$i++){
	$n1= $n1 + (pow($i, 2));
	$n2 = $n2 + $i;	
}
$n2 = pow($n2, 2);
//$n1 = sum of the sqares
//$n2 = square of the sums
$n3 = $n2 - $n1;
echo $n1 . "<br>" . $n2 . "<br>" . $n3;
}
calculate(100);
?>
