<?php
/*completed and sumbmitted - hash table
You're given strings jewels representing the types of stones that are jewels, and stones representing the stones you have. Each character in stones is a type of stone you have. You want to know how many of the stones you have are also jewels.
Letters are case sensitive, so "a" is considered a different type of stone from "A".

Example 1:
Input: jewels = "aA", stones = "aAAbbbb"
Output: 3

Example 2:
Input: jewels = "z", stones = "ZZ"
Output: 0
*/

// $jewels = "aA"; $stones = "aAAbbbb";// re 3
$jewels = "z"; $stones = "ZZ";// re 0


$jewels_len = strlen($jewels);
$stones_len = strlen($stones);
$counter = 0;
$jewels_hash = [];

for ($i=0; $i < $jewels_len; $i++) 
{
    if(!isset($jewels_hash[$jewels[$i]])){
        $jewels_hash[$jewels[$i]] = 0;
    }
    $jewels_hash[$jewels[$i]]++;
}

for ($i=0; $i < $stones_len; $i++) 
{
    if(isset($jewels_hash[$stones[$i]]))
        $counter++;
}
echo  $counter;
?>