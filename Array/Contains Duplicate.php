<?php
/*completed and sumbmitted
Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

Input: nums = [1,2,3,1]
Output: true
Input: nums = [1,2,3,4]
Output: false
*/
 $nums = array(2,14,18,22,22);
 $org_len = count($nums);
        
 $unique = array_unique($nums);
 $unique_len = count($unique);

if( $org_len > $unique_len)
{
    return true; 
   // echo"There are duplicated elems";
}else{
    return false; 
    //echo"No duplicated elems";
}
?>