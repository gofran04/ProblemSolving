<?php
/*completed and sumbmitted
Given an array nums of size n, return the majority element.
The majority element is the element that appears more than ⌊n / 2⌋ times. You may assume that the majority element always exists in the array.

Example 1:
Input: nums = [3,2,3]
Output: 3

Example 2:
Input: nums = [2,2,1,1,1,2,2]
Output: 2
*/

$nums = [3,2,3];// re
$hash = [];
$arrlen = count($nums);
$majority = $arrlen / 2;

for ($i=0; $i < $arrlen; $i++) 
{
    if(!isset($hash[$nums[$i]])){
        $hash[$nums[$i]] = 0;
    }
        $hash[$nums[$i]]++;
}

foreach ($hash as $key => $value) {
    if($value > $majority)
    return $key;
}

?>