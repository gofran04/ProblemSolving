<?php
/*completed and sumbmitted - recursion
Given an integer n, return true if it is a power of four. Otherwise, return false.
An integer n is a power of four, if there exists an integer x such that n == 4x.
Example 1:
Input: n = 16
Output: true

Example 2:
Input: n = 5
Output: false
Example 3:
Input: n = 1
Output: true
*/
$n = 3;
$result = 1;

if($n == 1) 
{
    return true; 
}
while(($result = 4*($result)) <= $n)
{
    if($result == $n) {
        return true; 
        break;
    }
}
return false; 
?>