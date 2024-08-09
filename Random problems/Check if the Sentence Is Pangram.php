<?php
/*completed and sumbmitted - hash table
A pangram is a sentence where every letter of the English alphabet appears at least once.
Given a string sentence containing only lowercase English letters, return true if sentence is a pangram, or false otherwise.
Example 1:
Input: sentence = "thequickbrownfoxjumpsoverthelazydog"
Output: true
Explanation: sentence contains at least one of every letter of the English alphabet.

Example 2:
Input: sentence = "leetcode"
Output: false
*/

// $sentence = "thequickbrownfoxjumpsoverthelazydog";//should return true
$sentence = "leetcode"; //re false

$alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$sentence_arr = str_split($sentence);
$sentence_uni = array_unique($sentence_arr);
$hash = [];
$counter = 0;

$hash = array_fill_keys($alphabet,false);
foreach ($sentence_uni as $char) {
  if(isset($hash[$char]))
    $counter++;
}

if ($counter == 26) {
  return true ;
}else{
  return false ;
}
?>