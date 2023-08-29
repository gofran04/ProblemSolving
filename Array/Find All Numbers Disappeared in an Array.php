<?php
/*
 completed and sumbmitted

Given an array nums of n integers where nums[i] is in the range [1, n], return an array of all the integers in the range [1, n] that do not appear in nums.

Input: nums = [4,3,2,7,8,2,3,1]
Output: [5,6]
-------------------------
Input: nums = [1,1]
Output: [2]
*/

//$nums = array(4,3,2,7,8,2,3,1);
$nums = array(1,1);
$missing = array();
$len = count($nums);
sort($nums);
$val_to_search = 1;

$arr2 = range(1,count($nums));
$missing = array_diff($arr2,$nums);
print_r( array_diff($arr2,$nums));


?>