<?php
/*completed and sumbmitted
You are given an array of strings words and a string pref.
Return the number of strings in words that contain pref as a prefix.
A prefix of a string s is any leading contiguous substring of s.

Example 1:
Input: words = ["pay","attention","practice","attend"], pref = "at"
Output: 2
Explanation: The 2 strings that contain "at" as a prefix are: "attention" and "attend".

Example 2:
Input: words = ["leetcode","win","loops","success"], pref = "code"
Output: 0
Explanation: There are no strings that contain "code" as a prefix.
*/

$words = array("pay","attention","practice","attend");//pref = "at".should return 2
// $words = array("leetcode","win","loops","success");//pref = "code".should return 0

$pref = "code";
$arrlen = count($words);
$counter = 0;

for ($i=0; $i < $arrlen; $i++) 
{
  $word_Pref = substr($words[$i],0,strlen($pref));
  if($word_Pref == $pref)
    $counter++;
}
  echo  $counter ;
  // return  $counter ;
?>