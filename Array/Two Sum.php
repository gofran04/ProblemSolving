<?php
/*completed and sumbmitted
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
You may assume that each input would have exactly one solution, and you may not use the same element twice.
You can return the answer in any order.

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
Input: nums = [3,2,4], target = 6
Output: [1,2]
*/

/* $nums = array(2,7,11,15);
$target = 9; 
$nums = array(-1,-2,-3,-4,-5);
$target = -8;*/
$nums = array(-0,4,5,0);
$target = 0;
$len = count($nums);
$output = array();

for ($i=0; $i < $len; $i++) 
{ 
    $second_ele = $target - $nums[$i];
    $x = array_search($second_ele,$nums);
    echo "sec: ".$second_ele."\n";

    if(is_int($x) && ($x != $i)) 
    {
        array_push($output,$i,$x);
        break;
    }
}
print_r($output);

?>