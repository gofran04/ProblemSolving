<?php
/*completed and sumbmitted
Given an array of strings words, return the words that can be typed using letters of the alphabet on only one row of American keyboard like the image below.
In the American keyboard:
the first row consists of the characters "qwertyuiop",
the second row consists of the characters "asdfghjkl", and
the third row consists of the characters "zxcvbnm".
*/

$words = ["Hello","Alaska","Dad","Peace"];//return ["Alaska","Dad"]

$arrlen = count($words);
$row1 = ["Q","q","W","w","E","e","R","r","T","t","Y","y","U","u","I","i","O","o","P","p"];
$row2 = ["A","a","S","s","D","d","F","f","G","g","H","h","J","j","K","k","L","l"];
$row3 = ["Z","z","X","x","C","c","V","v","B","b","N","n","M","m"];
$arr = [];

for ($i=0; $i < $arrlen; $i++) 
{
  $temp_arr = str_split($words[$i]);
  if(empty(array_diff($temp_arr,$row1)) || empty(array_diff($temp_arr,$row2)) || empty(array_diff($temp_arr,$row3))) 
      array_push($arr,$words[$i]); 
}
// return $arr; 
print_r($arr);
?>
