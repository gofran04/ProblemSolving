<?php
/*completed and sumbmitted - 2 pointer
Given a string s, reverse the string according to the following rules:
All the characters that are not English letters remain in the same position.
All the English letters (lowercase or uppercase) should be reversed.
Return s after reversing it.
Example 1:
Input: s = "ab-cd"
Output: "dc-ba"

Example 2:
Input: s = "a-bC-dEf-ghIj"
Output: "j-Ih-gfE-dCba"

Example 3:
Input: s = "Test1ng-Leet=code-Q!"
Output: "Qedo1ct-eeLg=ntse-T!"
*/

// $s = "ab-cd";// re "dc-ba"
// $s = "a-bC-dEf-ghIj"; // re "j-Ih-gfE-dCba"
// $s = "Test1ng-Leet=code-Q!"; // re "Qedo1ct-eeLg=ntse-T!"
// $s = "abc!";// re "cba!"
$s = "z<*zj"; // re "j<*zz"

$reversed = strrev($s);
$str_len = strlen($s);
$result = "";
$j = 0;
for ($i=0; $i < $str_len; $i++) 
{
    if(preg_match('/^[a-zA-Z]$/', $s[$i])){
        while(preg_match('/^[a-zA-Z]$/', $reversed[$j]) == false && ($j < $str_len)){
            $j++;
        }
        
        $result = $result . $reversed[$j];
    }else{
        $result = $result . $s[$i] ; 
        $j--;
    }

    $j++;
}
echo $result;
?>