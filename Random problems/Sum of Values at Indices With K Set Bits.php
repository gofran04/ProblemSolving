<?php
/*completed and sumbmitted
You are given a 0-indexed integer array nums and an integer k.
Return an integer that denotes the sum of elements in nums whose corresponding indices have exactly k set bits in their binary representation.
The set bits in an integer are the 1's present when it is written in binary.
For example, the binary representation of 21 is 10101, which has 3 set bits.
 
Example 1:
Input: nums = [5,10,1,5,2], k = 1
Output: 13
Explanation: The binary representation of the indices are: 
0 = 0002
1 = 0012
2 = 0102
3 = 0112
4 = 1002 
Indices 1, 2, and 4 have k = 1 set bits in their binary representation.
Hence, the answer is nums[1] + nums[2] + nums[4] = 13.

Example 2:
Input: nums = [4,3,2,1], k = 2
Output: 1
Explanation: The binary representation of the indices are:
0 = 002
1 = 012
2 = 102
3 = 112
Only index 3 has k = 2 set bits in its binary representation.
Hence, the answer is nums[3] = 1.
*/

$nums = [5,10,1,5,2]; $k = 1;// re

$arrlen = count($nums);
$binary = [];
$counter = 0;

for ($i=0; $i < $arrlen; $i++) 
{
    $binary[$i] = decbin($i);// get binary of int
}

foreach ($binary as $key => $value) 
{
    $tem_hash = [];
    $tem_str = (string)$value;
    $ones = 0;
    $len = strlen($tem_str);
    for ($i=0; $i < $len; $i++) 
    {
        if($tem_str[$i] == 1)
        $ones++;
    }

    if($ones == $k)
    $counter += $nums[$key];
}

 print_r($binary);
 echo $counter;
?>