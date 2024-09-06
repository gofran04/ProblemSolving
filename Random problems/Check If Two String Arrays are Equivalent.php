<?php
/*completed and sumbmitted
Given two string arrays word1 and word2, return true if the two arrays represent the same string, and false otherwise.
A string is represented by an array if the array elements concatenated in order forms the string.

Example 1:
Input: word1 = ["ab", "c"], word2 = ["a", "bc"]
Output: true
Explanation:
word1 represents string "ab" + "c" -> "abc"
word2 represents string "a" + "bc" -> "abc"
The strings are the same, so return true.

Example 2:
Input: word1 = ["a", "cb"], word2 = ["ab", "c"]
Output: false

Example 3:
Input: word1  = ["abc", "d", "defg"], word2 = ["abcddefg"]
Output: true
*/

// $word1 = ["ab", "c"]; $word2 = ["a", "bc"];// re true
// $word1 = ["a", "cb"]; $word2 = ["ab", "c"]; // re false
$word1  = ["abc", "d", "defg"]; $word2 = ["abcddefg"]; // re true

$str1 = implode('',$word1);
$str2 = implode('',$word2);

if ($str1 == $str2) 
{
    echo "true";
}else{
    echo "false";
}
?>