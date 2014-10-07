<?php
/*

A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

Find the largest palindrome made from the product of two 3-digit numbers.
*/

for ($i1=100; $i1 < 1000; $i1++){
	for ($i2=100; $i2 < 1000; $i2++){
		$num = $i1 * $i2;
		/*if this iteration produces a palidrome > the previous, $palindrom is given the higher value. 
		I suspect that there is a better solution, but this problem has had me scratching my head long enough. */
		if ($num == strrev($num) && ($num > $palindrome)){
			$palindrome = $num;
		}
	}
}

echo $palindrome;
?>
