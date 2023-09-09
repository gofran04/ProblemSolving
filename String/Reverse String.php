<?php
/*completed and sumbmitted
Write a function that reverses a string. The input string is given as an array of characters s.
You must do this by modifying the input array in-place with O(1) extra memory.

Input: s = ["h","e","l","l","o"]
Output: ["o","l","l","e","h"]
Input: s = ["H","a","n","n","a","h"]
Output: ["h","a","n","n","a","H"]
*/
 //$s = array("h","e","l","l","o");
 $s = array("s","e","a","r","m");

 $len = count($s);
 for ($i=0; $i < $len/2; $i++) 
 {
    $temp = $s[$i];
    $s[$i] = $s[$len- ($i+1)];
    $s[$len- ($i+1)] = $temp;
 }
 //print_r($s);

?>