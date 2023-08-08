<?php
/*completed and sumbmitted

Given an integer array nums sorted in non-decreasing order, return an array of the squares of each number sorted in non-decreasing order.

Input: nums = [-4,-1,0,3,10]
Output: [0,1,9,16,100]
Explanation: After squaring, the array becomes [16,1,0,9,100].
After sorting, it becomes [0,1,9,16,100].
*/
$nums = array(2,1,0,-4,3);
sort($nums);
$nums2 = [];
 $len = count($nums);
 $total = 0;
 for ($i=0; $i < $len; $i++) 
 {
    $var = $nums[$i] * $nums[$i];
    $nums2[$i] = $var;
 }
 print_r($nums2);
?>