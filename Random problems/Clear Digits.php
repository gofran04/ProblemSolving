<?php
/*completed and sumbmitted - stack
You are given a string s.
Your task is to remove all digits by doing this operation repeatedly:
Delete the first digit and the closest non-digit character to its left.
Return the resulting string after removing all digits.

Example 1:
Input: s = "abc"
Output: "abc"
Explanation:
There is no digit in the string.

Example 2:
Input: s = "cb34"
Output: ""
Explanation:
First, we apply the operation on s[2], and s becomes "c4".
Then we apply the operation on s[1], and s becomes "".
*/

// $s = "abc";// re "abc"
$s = "cb34";// re ""

$str = "";
$str_len = strlen($s);
$stack = array();


for ($i=0; $i < $str_len; $i++) 
{
    if (preg_match('/^\d$/', $s[$i])) {
        array_pop($stack);
    } else {
        array_push($stack,$s[$i]);
    }
}

while (! empty($stack)) {
   $str = array_pop($stack) . $str;
}
echo "s: ".$str;
?>