<?php
/*completed and sumbmitted
Given a string s, find the first non-repeating character in it and return its index. If it does not exist, return -1.

Input: s = "leetcode"
Output: 0
Input: s = "aabb"
Output: -1
*/
 $s = "leetcode";
 //$s = "sssss";

 $arr = str_split($s);
 $count_values = array_count_values($arr);
 $val = array_search(1,$count_values);
 $index = array_search($val,$arr);

 if($val == null)
 {
   echo " no unigue elem";
   //return -1;
 }else
 {
   echo $index;
   //return $index;
 }


