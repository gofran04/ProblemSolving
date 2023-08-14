<?php
/*
completed and sumbmitted
Given an integer array nums sorted in non-decreasing order, remove the duplicates in-place such that each unique element appears only once. The relative order of the elements should be kept the same. Then return the number of unique elements in nums.

Consider the number of unique elements of nums to be k, to get accepted, you need to do the following things:

Change the array nums such that the first k elements of nums contain the unique elements in the order they were present in nums initially. The remaining elements of nums are not important as well as the size of nums.
Return k
Input: nums = [0,0,1,1,1,2,2,3,3,4]
Output: 5, nums = [0,1,2,3,4,_,_,_,_,_]
*/
$nums = array(0,0,0,1,1,2,2,2,3,3,4);
 
    for ($i=0; $i < count($nums) ; $i++) 
    {
        $save = $nums[$i];
        for ($n=$i+1; $n < count($nums) ; $n++)
        {
            if ($nums[$n] == $save)
            {
                array_splice($nums,$n,1);
                $n--;   
            }
        }
    }
?>