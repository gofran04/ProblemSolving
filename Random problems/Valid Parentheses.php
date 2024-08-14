<?php
/*completed and sumbmitted - stack - with help
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:
Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Every close bracket has a corresponding open bracket of the same type.

Example 1:
Input: s = "()"
Output: true

Example 2:
Input: s = "()[]{}"
Output: true

Example 3:
Input: s = "(]"
Output: false
*/

// $s = "()";// re true
// $s = "()[]{}"; // re true
// $s = "{[]}"; // re true
$s = "{]}"; // re true

$stack = array();
$top = -1;
$arrlen = strlen($s);
$brackets_map = [
    ')' => '(',
    '}' => '{',
    ']' => '['
];

for ($i=0; $i < $arrlen; $i++) 
{
    $bracket = $s[$i];
    if(array_key_exists($bracket,$brackets_map))// if it is close bracket
    {
        $open_braket = array_pop($stack);
        if($brackets_map[$bracket] != $open_braket)
        echo "false";
        // return false;
    break;

    }else{
        array_push($stack,$bracket); // if it is open bracket
    }
}
echo  empty($stack);
// return  empty($stack);
?>