<?php
/*completed and sumbmitted
Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
You must implement a solution with a linear runtime complexity and use only constant extra space.

Input: nums = [2,2,1]
Output: 1
Input: nums = [4,1,2,1,2]
Output: 4
*/
 $nums = array(2,2,2,1);
        
 $count_values = array_count_values($nums);
print_r($count_values);
$val = array_search(1,$count_values); // i will return val

?>