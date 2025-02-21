<?php
/*completed and sumbmitted 100%
An integer divisible by the sum of its digits is said to be a Harshad number. You are given an integer x. Return the sum of the digits of x if x is a Harshad number, otherwise, return -1.
Example 1:
Input: x = 18
Output: 9
Explanation:
The sum of digits of x is 9. 18 is divisible by 9. So 18 is a Harshad number and the answer is 9.

Example 2:
Input: x = 23
Output: -1
Explanation:
The sum of digits of x is 5. 23 is not divisible by 5. So 23 is not a Harshad number and the answer is -1.
*/

// $x = 18; // 9
$x = 23; // -1

$str = (string)$x;
$len = strlen($str);
$sum = 0;

for ($i=0; $i < $len; $i++) 
{
    $sum += $str[$i];
}

if($x % $sum == 0)
{
    echo $sum;
}else{
    echo -1;
}

?>