<?php
/*completed and sumbmitted
A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include letters and numbers.
Given a string s, return true if it is a palindrome, or false otherwise.

Input: s = "A man, a plan, a canal: Panama"
Output: true
Explanation: "amanaplanacanalpanama" is a palindrome.

Input: s = "race a car"
Output: false
Explanation: "raceacar" is not a palindrome.

Input: s = " "
Output: true
Explanation: s is an empty string "" after removing non-alphanumeric characters.
Since an empty string reads the same forward and backward, it is a palindrome. 
*/
//$s = "A man, a plan, a canal: Panama";
//$s = "race a car";
$s = " ";
$new_s = preg_replace( '/[^a-z0-9]/i', '', $s);
$new_s =  strtolower($new_s);
$rev_s = strrev($new_s);

echo $new_s;


if($new_s == $rev_s)
{
   //return true;
   echo " yesssssssss ";

}else{
  // return false;
  echo " no ";
}


