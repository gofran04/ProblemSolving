<?php
/*completed and sumbmitted - hash table - with hep
Given a string array words, return an array of all characters that show up in all strings within the words (including duplicates). You may return the answer in any order.

Example 1:
Input: words = ["bella","label","roller"]
Output: ["e","l","l"]

Example 2:
Input: words = ["cool","lock","cook"]
Output: ["c","o"]
*/

$words = ["bella","label","roller"];//should return ["e","l","l"]
// $words = ["cool","lock","cook"];// re ["c","o"]


$arrlen = count($words);
$hash = [];
$arr = [];

$arr1 = str_split($words[0]);
$intersects = array_count_values($arr1);

for ($i=1; $i < $arrlen; $i++) 
{
  $str_arr1 = str_split($words[$i]);
  $values = array_count_values($str_arr1);

  foreach ($intersects as $key => $value) {
  if(isset($values[$key]))
  {
    $intersects[$key] = min($values[$key],$intersects[$key]);
  }else{
    unset($intersects[$key]);
  }
} 
}

foreach ($intersects as $key => $value) {
  for ($i=0; $i < $value; $i++) { 
    array_push($arr,$key);
  }
}
print_r($arr);
?>