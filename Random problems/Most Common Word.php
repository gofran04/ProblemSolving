<?php
/*completed and sumbmitted - hash table
Given a string paragraph and a string array of the banned words banned, return the most frequent word that is not banned. It is guaranteed there is at least one word that is not banned, and that the answer is unique.
The words in paragraph are case-insensitive and the answer should be returned in lowercase.
Example 1:
Input: paragraph = "Bob hit a ball, the hit BALL flew far after it was hit.", banned = ["hit"]
Output: "ball"
Explanation: 
"hit" occurs 3 times, but it is a banned word.
"ball" occurs twice (and no other word does), so it is the most frequent non-banned word in the paragraph. 
Note that words in the paragraph are not case sensitive,
that punctuation is ignored (even if adjacent to words, such as "ball,"), 
and that "hit" isn't the answer even though it occurs more because it is banned.

Example 2:
Input: paragraph = "a.", banned = []
Output: "a"
*/
$paragraph = "..Bob hit a ball, the hit BALL flew far after it was hit."; $banned = ["hit"];// re "ball"
// $paragraph = "a, a, a, a, b,b,b,c, c"; $banned = ["a"];// re "b"
// $paragraph = "Bob!"; $banned = ["hit"];
// $paragraph = "a."; $banned = [];//re "a"
// $paragraph = "Bob hit a ball, the hit BALL flew far after it was hit."; $banned = ["hit"];//should return "ball

$cleaned = preg_replace('/[^a-zA-Z]+/', ' ', $paragraph);
$paragraph_arr = explode(" ",$cleaned);
$arrlen = count($paragraph_arr);
$hash = [];

for ($i=0; $i < $arrlen; $i++) 
{
  $str = strtolower($paragraph_arr[$i]);
  if(!isset($hash[$str])){
    $hash[$str] = 0;
  }
  $hash[$str]++;
}
arsort($hash);
foreach ($hash as $key => $value) {
  if((in_array($key,$banned)) || ($key == "")){
    continue;
  }else{
    echo $key;
    break;
  }
}
?>