<?php
/*
completed and submitted
Given an array of integers arr, return true if and only if it is a valid mountain array.
Input: arr = [2,1]
Output: false
-------------
Input: arr = [0,3,2,1]
Output: true
*/
$arr = array(1,2,3,4,2,1,0);
$len = count($arr);
$up = 0;
$down = 0;
$max = max($arr);
$max_index = array_search(max($arr),$arr);

for ($i= $max_index; $i > 0; $i--) 
{ 
    if ($arr[$i] > $arr[$i-1]) {
        $up = 1;
    } else {
        $up = 0;
        break;
    }  
}

for ($j= $max_index; $j < count($arr)-1 ; $j++) 
{ 
    if ($arr[$j] > $arr[$j+1]) {
        $down = 1;
    } else {
        $down = 0;
        break;
    }  
}

if($up == 1 && $down ==1 && count($arr) >= 3)
{
    return true;
}else
{
    return false;
}

?>
