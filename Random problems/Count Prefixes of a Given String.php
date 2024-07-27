<?php
/*completed and sumbmitted - Got 100%
You are given a string array words and a string s, where words[i] and s comprise only of lowercase English letters.
Return the number of strings in words that are a prefix of s.
A prefix of a string is a substring that occurs at the beginning of the string. A substring is a contiguous sequence of characters within a string.

Example 1:
Input: words = ["a","b","c","ab","bc","abc"], s = "abc"
Output: 3
Explanation:
The strings in words which are a prefix of s = "abc" are:
"a", "ab", and "abc".
Thus the number of strings in words which are a prefix of s is 3.

Example 2:

Input: words = ["a","a"], s = "aa"
Output: 2
Explanation:
Both of the strings are a prefix of s. 
Note that the same string can occur multiple times in words, and it should be counted each time.
*/

// $words = ["a","b","c","ab","bc","abc"]; $s = "abc";//should return 3
$words = ["a","a"]; $s = "aa";//should return 2
$arrlen = count($words);
$s_arr = str_split($s);
$counter2 = 0;

for ($i=0; $i < $arrlen; $i++) 
{
  $counter1 = 0;
  $temp_arr = str_split($words[$i]);
  for ($j=0; $j < count($temp_arr); $j++) 
  {

    if($temp_arr[$j] == $s_arr[$j])
    $counter1++;

    if($counter1 == strlen($words[$i]))
    $counter2++;
  }
}
  echo $counter2 ;
  // return $counter2 ;
?>