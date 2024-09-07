<?php
/*uncompleted and sumbmitted - stack
The Leetcode file system keeps a log each time some user performs a change folder operation.
The operations are described below:
"../" : Move to the parent folder of the current folder. (If you are already in the main folder, remain in the same folder).
"./" : Remain in the same folder.
"x/" : Move to the child folder named x (This folder is guaranteed to always exist).
You are given a list of strings logs where logs[i] is the operation performed by the user at the ith step.
The file system starts in the main folder, then the operations in logs are performed.
Return the minimum number of operations needed to go back to the main folder after the change folder operations.
Example 1:
Input: logs = ["d1/","d2/","../","d21/","./"]
Output: 2
Explanation: Use this change folder operation "../" 2 times and go back to the main folder.

Example 2:
Input: logs = ["d1/","d2/","./","d3/","../","d31/"]
Output: 3

Example 3:
Input: logs = ["d1/","../","../","../"]
Output: 0
*/

// $logs = ["d1/","d2/","../","d21/","./"];// re 2
// $logs = ["d1/","d2/","./","d3/","../","d31/"]; // re 3
// $logs = ["d1/","../","../","../"];// re 0
$logs =["./","../","./"];// re 0


$arrlen = count($logs);
$stack = [];
$counter = 0;

for ($i=0; $i < $arrlen; $i++) 
{
    if(($logs[$i] == '../' ) && ! empty($stack)){
        array_pop($stack);
    }elseif($logs[$i] == './' ){
        continue;
    }elseif(($logs[$i] != '../' ) && ($logs[$i] != './' ) ){
        array_push($stack,$logs[$i]);
    }
}

while (! empty($stack)) {
    array_pop($stack);
    $counter++;
}
echo $counter;
?>