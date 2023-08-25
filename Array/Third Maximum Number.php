<?php
/*
completed and sumbmitted

Given an integer array nums, return the third distinct maximum number in this array. If the third maximum does not exist, return the maximum number.

Input: nums = [3,2,1]
Output: 1
Explanation:
The first distinct maximum is 3.
The second distinct maximum is 2.
The third distinct maximum is 1.
-----------------------------------------------
Input: nums = [1,2]
Output: 2
Explanation:
The first distinct maximum is 2.
The second distinct maximum is 1.
The third distinct maximum does not exist, so the maximum (2) is returned instead.

*/

$nums = array(3,3,4,3,4,3,0,3,3);
//$nums = array(1,2);

    if(count($nums) > 1)
        {
            $first_max = max($nums);
            $nums = array_diff($nums,[$first_max]);
            $nums = array_values($nums);

            if(! empty($nums))
            {
                $second_max = max($nums);
                $nums = array_diff($nums,[$second_max]);
                $nums = array_values($nums);

                if(! empty($nums))
                {
                    $third_max = max($nums);
                }
            }

            if($third_max !== null)
            {
                echo $third_max;
            }else{
                echo $first_max;
            }
        }else{
            echo max($nums);
        }
?>