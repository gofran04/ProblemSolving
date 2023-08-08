<?php
/*completed and sumbmitted

Given a binary array nums, return the maximum number of consecutive 1's in the array.

Input: nums = [1,1,0,1,1,1]
Output: 3 
Explanation: The first two digits or the last three digits are consecutive 1s. The maximum number of consecutive 1s is 3.

*/
 $nums = array(1,1,0,1,1,1,1,1,0,1,1,0,1,1);
 $len = count($nums);
 $count = 0;
 $maxSec = 0;
 for ($i=0; $i < $len; $i++) 
 { 
     if($nums[$i] == 1)
     {
        $count = $count + 1;
        if ($count > $maxSec) 
        {
            $maxSec = $count;
        }
        
     }
     if($nums[$i] == 0)
     {
        $count = 0;
     }


 }
echo "  |Max consecutive ones is: " . $maxSec;


?>