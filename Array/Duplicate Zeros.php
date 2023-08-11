<?php
/* completed and sumbmitted
Given a fixed-length integer array arr, duplicate each occurrence of zero, shifting the remaining elements to the right.
Note that elements beyond the length of the original array are not written. Do the above modifications to the input array in place and do not return anything.

Input: arr = [1,0,2,3,0,4,5,0]
Output: [1,0,0,2,3,0,0,4]
Explanation: After calling your function, the input array is modified to: [1,0,0,2,3,0,0,4]
*/
$nums = array(1,0,2,3,0,4,5,0);
$len = count($nums);
for ($i=0; $i < $len-1; $i++) 
{
    if ($nums[$i] == 0)
    {
        for ($j=$len-1; $j > $i; $j--) 
        {
            $nums[$j] = $nums[$j-1]; 
        }
        $nums[$i+1] = 0;
        $i++;
    }
}
?>