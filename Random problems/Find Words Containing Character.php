<?php
/*completed and sumbmitted
You are given a 0-indexed array of strings words and a character x.
Return an array of indices representing the words that contain the character x.

Example 2:

Input: words = ["abc","bcd","aaaa","cbc"], x = "a"
Output: [0,2]
Explanation: "a" occurs in "abc", and "aaaa". Hence, we return indices 0 and 2.
Example 3:

Input: words = ["abc","bcd","aaaa","cbc"], x = "z"
Output: []
Explanation: "z" does not occur in any of the words. Hence, we return an empty array.
*/
 
// $words = array("leet","code");/should return [0,1]
$words = array("abc","bcd","aaaa","cbc");//should return [0,1,3]
$x = "c";
$arrlen = count($words);
$arr = [];

for ($i=0; $i < $arrlen; $i++) 
{
   if(strpos($words[$i],$x) !== false)  {
      array_push($arr,$i);}
}
      print_r($arr);
?>