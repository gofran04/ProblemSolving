<?php
/*completed and sumbmitted- hash table
A distinct string is a string that is present only once in an array.
Given an array of strings arr, and an integer k, return the kth distinct string present in arr. If there are fewer than k distinct strings, return an empty string "".
Note that the strings are considered in the order in which they appear in the array.

Example 1:
Input: arr = ["d","b","c","b","c","a"], k = 2
Output: "a"
Explanation:
The only distinct strings in arr are "d" and "a".
"d" appears 1st, so it is the 1st distinct string.
"a" appears 2nd, so it is the 2nd distinct string.
Since k == 2, "a" is returned. 

Example 2:
Input: arr = ["aaa","aa","a"], k = 1
Output: "aaa"
Explanation:
All strings in arr are distinct, so the 1st string "aaa" is returned.

Example 3:
Input: arr = ["a","b","a"], k = 3
Output: ""
Explanation:
The only distinct string is "b". Since there are fewer than 3 distinct strings, we return an empty string "".

*/

// $arr = ["d","b","c","b","c","a"]; $k = 2;//should return a
// $arr = ["aaa","aa","a"]; $k = 1; // re "aaa"
$arr =["a","b","a"]; $k = 3; 

$arrlen = count($arr);
$hash = [];
$arr2 = [];
$counter = 0;

for ($i=0; $i < $arrlen; $i++) 
{
  if(!isset($hash[$arr[$i]])){
    $hash[$arr[$i]] = 0;
  }
  $hash[$arr[$i]]++;
}

foreach ($hash as $key => $value) {
  if($value == 1)
  array_push($arr2,$key);
}

if($k > count($arr2)){
  echo "";
}else{
  echo $arr2[$k-1];
}

?>