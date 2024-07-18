<?php
/*completed and sumbmitted- got 100%
Given a string s and an array of strings words, determine whether s is a prefix string of words.
A string s is a prefix string of words if s can be made by concatenating the first k strings in words for some positive k no larger than words.length.
Return true if s is a prefix string of words, or false otherwise.

Example 1:
Input: s = "iloveleetcode", words = ["i","love","leetcode","apples"]
Output: true
Explanation:
s can be made by concatenating "i", "love", and "leetcode" together.

Example 2:
Input: s = "iloveleetcode", words = ["apples","i","love","leetcode"]
Output: false
Explanation:
It is impossible to make s using a prefix of arr.
*/

// $words = array("i","love","leetcode","apples");//$s = "iloveleetcode".should return true
// $words = array("apples","i","love","leetcode");//$s = "iloveleetcode".should return false
$words = array("c","cc");//$s = "ccccccccc".should return false
$s = "iloveleetcode";
$arrlen = count($words);
$prefix = $words[0];
$i = 1;

while (strlen($prefix) < strlen($s)) {
   $prefix = $prefix . $words[$i];
   if($i+1 >= $arrlen){
        break;
    }else{
        $i++;
    }
}
if($prefix === $s){
    echo 'true';
    // return true;
}else{
    echo 'false';
    // return false;
}

?>