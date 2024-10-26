<?php
/*completed and sumbmitted - 100%
You are given an integer array nums.
You replace each element in nums with the sum of its digits.
Return the minimum element in nums after all replacements.

Example 1:
Input: nums = [10,12,13,14]
Output: 1
Explanation:
nums becomes [1, 3, 4, 5] after all replacements, with minimum element 1.

Example 2:
Input: nums = [1,2,3,4]
Output: 1
Explanation:
nums becomes [1, 2, 3, 4] after all replacements, with minimum element 1.

Example 3:
Input: nums = [999,19,199]
Output: 10
Explanation:
nums becomes [27, 10, 19] after all replacements, with minimum element 10.
*/

$nums = [10,12,13,14];// re

$arrlen = count($nums);
$result = [];

for ($i=0; $i < $arrlen; $i++) 
{
    $str = (string)$nums[$i];
    $counter = 0;
    for ($j=0; $j < strlen($str); $j++) 
    {
        $counter += (int)$str[$j];
    }

    $result[$i] = $counter;
}

echo min($result);
?>