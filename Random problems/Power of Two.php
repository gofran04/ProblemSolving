<?php
/*completed and sumbmitted - recursion
Given an integer n, return true if it is a power of two. Otherwise, return false.
An integer n is a power of two, if there exists an integer x such that n == 2x.
Example 1:
Input: n = 1
Output: true
Explanation: 20 = 1

Example 2:
Input: n = 16
Output: true
Explanation: 24 = 16

Example 3:
Input: n = 3
Output: false
*/
$n = 3;
$result = 1;

if($n == 1) 
{
    return true; 
}
while(($result = 2*($result)) <= $n)
{
    if($result == $n) {
        return true; 
        break;
    }
}
return false; 
?>