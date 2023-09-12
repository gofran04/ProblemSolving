<?php
/*completed and sumbmitted BUT: i opened an issue in github. its expected me to return 0, but i returned the revere (9646324351). because it is int.
Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.

Input: x = 123
Output: 321
Input: x = -123
Output: -321
Input: x = 120
Output: 21
*/
 //$x = 9646324351;
 $x = 5985666111111111111111111111111111166666666666666666;

 $val = strval($x);
 $arr = array();

for ($i=0; $i < strlen($val); $i++) 
{
   $arr[$i] = $val[$i];
}

if ($arr[0] == "-") 
{
   $arr = array_splice($arr,1);
   $arr = array_reverse($arr);
   array_unshift($arr,"-");
}else
{
   $arr = array_reverse($arr);
}

$new_str = implode("",$arr);
$new_int = intval($new_str);

if(is_int($x))
{
   echo $new_int;
   echo "Its Int";

}else
{
   echo "Not Int";
}
?>