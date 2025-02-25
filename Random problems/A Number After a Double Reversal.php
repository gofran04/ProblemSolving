<?php
/*completed and sumbmitted
Reversing an integer means to reverse all its digits.
For example, reversing 2021 gives 1202. Reversing 12300 gives 321 as the leading zeros are not retained.
Given an integer num, reverse num to get reversed1, then reverse reversed1 to get reversed2. Return true if reversed2 equals num. Otherwise return false.
Example 1:
Input: num = 526
Output: true
Explanation: Reverse num to get 625, then reverse 625 to get 526, which equals num.

Example 2:
Input: num = 1800
Output: false
Explanation: Reverse num to get 81, then reverse 81 to get 18, which does not equal num.

Example 3:
Input: num = 0
Output: true
Explanation: Reverse num to get 0, then reverse 0 to get 0, which equals num.
*/

// $num = 526;// re true
$num = 1800; // false

$str_num1 = (string)$num;

$rev1_str = strrev($str_num1);
$rev1_int = (int)$rev1_str;

$str_num2 = (string)$rev1_int;
$rev2_str = strrev($str_num2);
$rev2_int = (int)$rev2_str;

if($num === $rev2_int)
{
echo "t";
}else{
    echo "f";
}

?>