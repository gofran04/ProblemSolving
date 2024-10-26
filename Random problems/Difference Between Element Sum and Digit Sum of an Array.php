<?php
/*completed and sumbmitted
You are given a positive integer array nums.
The element sum is the sum of all the elements in nums.
The digit sum is the sum of all the digits (not necessarily distinct) that appear in nums.
Return the absolute difference between the element sum and digit sum of nums.
Note that the absolute difference between two integers x and y is defined as |x - y|.

Example 1:
Input: nums = [1,15,6,3]
Output: 9
Explanation: 
The element sum of nums is 1 + 15 + 6 + 3 = 25.
The digit sum of nums is 1 + 1 + 5 + 6 + 3 = 16.
The absolute difference between the element sum and digit sum is |25 - 16| = 9.

Example 2:
Input: nums = [1,2,3,4]
Output: 0
Explanation:
The element sum of nums is 1 + 2 + 3 + 4 = 10.
The digit sum of nums is 1 + 2 + 3 + 4 = 10.
The absolute difference between the element sum and digit sum is |10 - 10| = 0.
*/

$nums = [1,15,6,3];// re 9

$element_sum = array_sum($nums);
$digit_sum = 0; 

$arrlen = count($nums);

for ($i=0; $i < $arrlen; $i++) 
{
    if(strlen($nums[$i]) > 1)
    {
        $tem = (string)$nums[$i];
        $len = strlen($tem);
        for ($j=0; $j < $len; $j++)
        {
            $digit_sum += (int)$tem[$j];
        }

    }else{
        $digit_sum += $nums[$i];
    }
}

echo $element_sum - $digit_sum;
?>