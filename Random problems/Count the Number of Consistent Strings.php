<?php
/*completed and sumbmitted - hash table
You are given a string allowed consisting of distinct characters and an array of strings words. A string is consistent if all characters in the string appear in the string allowed.
Return the number of consistent strings in the array words.

Example 1:
Input: allowed = "ab", words = ["ad","bd","aaab","baa","badab"]
Output: 2
Explanation: Strings "aaab" and "baa" are consistent since they only contain characters 'a' and 'b'.

Example 2:
Input: allowed = "abc", words = ["a","b","c","ab","ac","bc","abc"]
Output: 7
Explanation: All strings are consistent.

Example 3:
Input: allowed = "cad", words = ["cc","acd","b","ba","bac","bad","ac","d"]
Output: 4
Explanation: Strings "cc", "acd", "ac", and "d" are consistent.
*/

// $allowed = "ab"; $words = ["ad","bd","aaab","baa","badab"];//should return 2
// $allowed = "abc"; $words = ["a","b","c","ab","ac","bc","abc"]; // re7
$allowed = "cad"; $words = ["cc","acd","b","ba","bac","bad","ac","d"]; // re 4

$arrlen = count($words);
$counter1 = 0;

$allowed_arr = str_split($allowed);

for ($i=0; $i < $arrlen; $i++) 
{
  $counter2 = 0;
  $temp = array_unique(str_split($words[$i]));
  $temp = array_values($temp);
  $temp_len = count($temp);
  for ($j=0; $j < $temp_len; $j++) 
  {
    if(in_array($temp[$j],$allowed_arr))
    $counter2++;

    if($counter2 == $temp_len)
    $counter1++;
  }
}
  echo  $counter1;
?>