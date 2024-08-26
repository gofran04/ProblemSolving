<?php
/*completed and sumbmitted - medium
Given a list of strings words and a string pattern, return a list of words[i] that match pattern. You may return the answer in any order.
A word matches the pattern if there exists a permutation of letters p so that after replacing every letter x in the pattern with p(x), we get the desired word.
Recall that a permutation of letters is a bijection from letters to letters: every letter maps to another letter, and no two letters map to the same letter.

Example 1:
Input: words = ["abc","deq","mee","aqq","dkd","ccc"], pattern = "abb"
Output: ["mee","aqq"]
Explanation: "mee" matches the pattern because there is a permutation {a -> m, b -> e, ...}. 
"ccc" does not match the pattern because {a -> c, b -> c, ...} is not a permutation, since a and b map to the same letter.

Example 2:
Input: words = ["a","b","c"], pattern = "a"
Output: ["a","b","c"]
*/

$words = ["abc","deq","mee","aqq","dkd","ccc"]; $pattern = "abb";// re ["mee","aqq"]
// $words = ["badc","abab","dddd","dede","yyxx"]; $pattern = "baba"; // re ["abab","dede"]
// $words = ["a","b","c"]; $pattern = "a"; // re  ["a","b","c"]

$pattern_len = strlen($pattern);
$words_len = count($words);

$pattern1 = [];
$arr = [];

for ($i=0; $i < $pattern_len; $i++) 
{
  $the_pattern = "";
  $the_pattern = $i;
  for ($j=0; $j < $pattern_len; $j++)
  {
    if($i == $j)
    continue;

    if($pattern[$i] == $pattern[$j])
      $the_pattern =  $j . $the_pattern;
  }
  
 $pattern1["$pattern[$i]"] = $the_pattern;
}

for ($k=0; $k < $words_len; $k++) 
{
    $pattern2 = [];
    $str = $words[$k];
    $len = strlen($words[$k]);
    for ($i=0; $i < $len; $i++) 
    {
        $the_pattern = "";
        $the_pattern = $i;
        for ($j=0; $j < $len; $j++)
        {
            if($i == $j)
            continue;

            if($str[$i] == $str[$j])
            $the_pattern = $j . $the_pattern;
        }
        $pattern2["$str[$i]"] = $the_pattern;
    }

    if(array_values($pattern1) == array_values($pattern2))
    {
        array_push($arr,$words[$k]);
    }
}
print_r($arr);
?>