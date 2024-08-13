<?php
/*completed and sumbmitted - hash table
Given a string licensePlate and an array of strings words, find the shortest completing word in words.
A completing word is a word that contains all the letters in licensePlate. Ignore numbers and spaces in licensePlate, and treat letters as case insensitive. If a letter appears more than once in licensePlate, then it must appear in the word the same number of times or more.
For example, if licensePlate = "aBc 12c", then it contains letters 'a', 'b' (ignoring case), and 'c' twice. Possible completing words are "abccdef", "caaacab", and "cbca".
Return the shortest completing word in words. It is guaranteed an answer exists. If there are multiple shortest completing words, return the first one that occurs in words.

Example 1:
Input: licensePlate = "1s3 PSt", words = ["step","steps","stripe","stepple"]
Output: "steps"
Explanation: licensePlate contains letters 's', 'p', 's' (ignoring case), and 't'.
"step" contains 't' and 'p', but only contains 1 's'.
"steps" contains 't', 'p', and both 's' characters.
"stripe" is missing an 's'.
"stepple" is missing an 's'.
Since "steps" is the only word containing all the letters, that is the answer.

Example 2:
Input: licensePlate = "1s3 456", words = ["looks","pest","stew","show"]
Output: "pest"
Explanation: licensePlate only contains the letter 's'. All the words contain 's', but among these "pest", "stew", and "show" are shortest. The answer is "pest" because it is the word that appears earliest of the 3.
*/

// $licensePlate = "1s3 PSt"; $words = ["step","steps","stripe","stepple"];//should return "steps"
// $licensePlate = "1s3 456"; $words = ["looks","pest","stew","show"]; // re "pest 
$licensePlate = "GrC8950"; $words = ["measure","other","every","base","according","level","meeting","none","marriage","rest"]; // re "according 



$licensePlate = preg_replace('/[^a-zA-Z]/', '', $licensePlate);
$arrlen = count($words);
$strlen = strlen($licensePlate);
$hash = [];
$hash2 = [];


for ($i=0; $i < $strlen; $i++) 
{
  $str = strtolower($licensePlate[$i]);
  if(!isset($hash[$str])){
    $hash[$str] = 0;
  }
  $hash[$str]++;
}

for ($i=0; $i < $arrlen; $i++) 
{
  $counter = 0;
  $temp_arr = str_split($words[$i]);
  $values = array_count_values($temp_arr);

  foreach ($hash as $key => $value) {
    if(isset($values[$key])){
      if($values[$key] >= $value)
      $counter++;
    }
  }

  if($counter == count($hash))
  $hash2[$i] = strlen($words[$i]);
}

  asort($hash2);
  print_r($hash2);
  $firstKey = array_key_first($hash2);
  echo $words[$firstKey];
?>