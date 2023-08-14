<?php
/*
completed 
Given an array arr of integers, check if there exist two indices i and j such that :
Input: arr = [10,2,5,3]
Output: true
Input: arr = [3,1,7,11]
Output: false
*/
$arr = array(1,7,2,5,3,14,10);
$counter =0;
$zeros_counter =0;
for ($i=0; $i < count($arr) ; $i++) 
{
    $k = $arr[$i] / 2;
    for ($in=0; $in < count($arr) ; $in++)
    {
        if($i == $in)
            continue;
        if($k == 0 && $arr[$in] ==0)
            $zeros_counter++;
        if($arr[$in] == $k && $arr[$in] != 0)
        {
            $counter++;
            $i++;
        }
    }
}

if($counter > 0 || $zeros_counter > 0)
{
    return true;
}else{
    return false;
} 
?>