<?php
/*completed and sumbmitted
Given a positive integer n, find the sum of all integers in the range [1, n] inclusive that are divisible by 3, 5, or 7.
Return an integer denoting the sum of all numbers in the given range satisfying the constraint.

Example 1:
Input: n = 7
Output: 21

Explanation: Numbers in the range [1, 7] that are divisible by 3, 5, or 7 are 3, 5, 6, 7. The sum of these numbers is 21.
Example 2:
Input: n = 10
Output: 40

Explanation: Numbers in the range [1, 10] that are divisible by 3, 5, or 7 are 3, 5, 6, 7, 9, 10. The sum of these numbers is 40.
Example 3:
Input: n = 9
Output: 30
Explanation: Numbers in the range [1, 9] that are divisible by 3, 5, or 7 are 3, 5, 6, 7, 9. The sum of these numbers is 30.
*/

// $n = 7;// re 21
$n = 10; // re 40

$arr = range(1,$n);
$arrlen = count($arr);
$counter = 0;

for ($i=0; $i < $arrlen; $i++) 
{
    if(($arr[$i] % 3 == 0) || ($arr[$i] % 5 == 0) || ($arr[$i] % 7 == 0))
    $counter += $arr[$i];
}

echo $counter;

?>