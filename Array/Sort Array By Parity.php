<?php
/*
completed and sumbmitted
Given an integer array nums, move all the even integers at the beginning of the array followed by all the odd integers.

Return any array that satisfies this condition.
Input: nums = [3,1,2,4]
Output: [2,4,3,1]
Explanation: The outputs [4,2,3,1], [2,4,1,3], and [4,2,1,3] would also be accepted.
*/
$nums = array(3,1,2,4);
$len = count($nums);
$shifting_index = 0;
$shifting_ele = null;

for ($i=0; $i < count($nums) ; $i++) 
{
    if ($nums[$i] % 2 == 0 && $i !=0)
        {
            $shifting_ele = $nums[$i];
            for ($x = $i; $x > $shifting_index; $x--) 
            {
                $nums[$x] = $nums[$x-1] ;
            }
            $nums[$shifting_index] = $shifting_ele ;
            $shifting_index++; 
        } 
}
print_r($nums);
?>