<?php
/*completed and sumbmitted
You are given an integer array nums containing positive integers. We define a function encrypt such that encrypt(x) replaces every digit in x with the largest digit in x. For example, encrypt(523) = 555 and encrypt(213) = 333.
Return the sum of encrypted elements.

Example 1:
Input: nums = [1,2,3]
Output: 6
Explanation: The encrypted elements are [1,2,3]. The sum of encrypted elements is 1 + 2 + 3 == 6.

Example 2:
Input: nums = [10,21,31]
Output: 66
Explanation: The encrypted elements are [11,22,33]. The sum of encrypted elements is 11 + 22 + 33 == 66.
*/

use function PHPSTORM_META\map;

$nums = [10,21,31];// re
$result =[];

$arrlen = count($nums);

for ($i=0; $i < $arrlen; $i++) 
{
    $arr = [];
    $len = strlen($nums[$i]);
    $tem_arr = str_split($nums[$i]);
    $max =  max($tem_arr);
    for ($j=0; $j < $len; $j++) 
    {
        $arr[$j] = $max;
    }
    $string = implode('', $arr); 
    $result[$i] = (int)$string; 

}
array_sum($result);

?>