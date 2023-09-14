<?php
/*completed and sumbmitted
Given two strings s and t, return true if t is an anagram of s, and false otherwise.
An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.

Input: s = "anagram", t = "nagaram"
Output: true
Input: s = "rat", t = "car"
Output: false
*/
 //$s = "ab";
 //$s = "rat";
 $s = "aacc";
 //$s = "aa";
 
 //$t = "a";
 //$t = "car";
 $t = "ccac";
 //$t = "a";

 $s_arr = str_split($s);
 $t_arr = str_split($t);

$count_values_s = array_count_values($s_arr);
$count_values_t = array_count_values($t_arr);

$result1=array_diff_assoc($count_values_s,$count_values_t);
$result2=array_diff_assoc($count_values_t,$count_values_s);

if( empty($result1) && empty($result2))
{
   //return true;
   echo " yesssssssss ";

}else{
   return false;
  //echo " no ";
}


