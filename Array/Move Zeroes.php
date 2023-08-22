<?php
/*
completed and sumbmitted
Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.

Note that you must do this in-place without making a copy of the array.
Input: nums = [0,1,0,3,12]
Output: [1,3,12,0,0]

*/
$nums = array(0,0,0,1,1,2);//6:0,1,2,-,-,-
$old_len = count($nums);
$zero_counter = 0;

for ($i=0; $i < count($nums) ; $i++) 
{
    if ($nums[$i] == 0)
        {
            $zero_counter++;
            array_splice($nums,$i,1);
            $i--;       
        } 
}
$new_len = count($nums);
for ($x = $new_len; $x < $old_len ; $x++) 
{
    $nums[$x] = 0;
}
//print_r($nums);
?>