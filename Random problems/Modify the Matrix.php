<?php
/*completed and sumbmitted - matrix
Given a 0-indexed m x n integer matrix matrix, create a new 0-indexed matrix called answer. Make answer equal to matrix, then replace each element with the value -1 with the maximum element in its respective column.

Example 1:
Input: matrix = [[1,2,-1],[4,-1,6],[7,8,9]]
Output: [[1,2,9],[4,8,6],[7,8,9]]
Explanation: The diagram above shows the elements that are changed (in blue).
- We replace the value in the cell [1][1] with the maximum value in the column 1, that is 8.
- We replace the value in the cell [0][2] with the maximum value in the column 2, that is 9.

Example 2:
Input: matrix = [[3,-1],[5,2]]
Output: [[3,2],[5,2]]
Explanation: The diagram above shows the elements that are changed (in blue).
*/

$matrix = [[1,2,-1]
          ,[4,-1,6],
           [7,8,9]];// re

$rows = count($matrix);
$cols = count($matrix[0]);
$result = [];
$maxes = [];

for ($i=0; $i < $cols; $i++) 
{
    $arr = [];
    for ($j=0; $j < $rows; $j++) 
    {
        array_push($arr, $matrix[$j][$i]);   
    }
    array_push($maxes, max($arr));   
}

for ($i=0; $i < $cols; $i++) 
{
    for ($j=0; $j < $rows; $j++) 
    {
        if($matrix[$j][$i] == -1){
            $result[$j][$i] = $maxes[$i];
        }else{
            $result[$j][$i] = $matrix[$j][$i];
        }
    }

}
print_r($result);
?>