<?php
/*completed and sumbmitted - matrix
An n x n matrix is valid if every row and every column contains all the integers from 1 to n (inclusive).
Given an n x n integer matrix matrix, return true if the matrix is valid. Otherwise, return false.

Example 1:
Input: matrix = [[1,2,3],[3,1,2],[2,3,1]]
Output: true
Explanation: In this case, n = 3, and every row and column contains the numbers 1, 2, and 3.
Hence, we return true.

Example 2:
Input: matrix = [[1,1,1],[1,2,3],[1,2,3]]
Output: false
Explanation: In this case, n = 3, but the first row and the first column do not contain the numbers 2 or 3.
Hence, we return false.
*/

// $matrix = [[1,2,3],
//           [3,1,2],
//           [2,3,1]];// re true
$matrix = [[15,7,18,11,19,10,14,16,8,2,3,6,5,1,17,12,9,4,13],[17,15,9,8,11,13,7,6,5,1,3,16,12,19,10,2,4,14,18],[19,14,12,10,8,9,17,16,4,3,13,18,1,5,7,11,2,15,6],[4,2,10,15,19,16,8,9,5,3,1,11,13,14,6,18,12,17,7],[13,19,9,16,5,8,6,12,14,11,18,10,7,2,3,4,15,17,1],[4,7,18,11,17,16,5,12,10,1,15,13,14,6,19,2,3,9,8],[14,5,15,1,18,6,12,7,8,9,3,13,2,10,19,4,11,16,17],[10,3,1,8,14,19,11,18,15,13,9,12,16,17,7,4,5,2,6],[14,13,19,18,7,2,4,8,10,17,12,5,15,1,6,9,11,3,16],[19,8,10,18,16,12,11,17,4,9,7,2,5,13,15,3,6,1,14],[1,10,6,14,7,18,3,9,4,16,5,11,13,17,15,8,19,2,12],[13,10,5,16,1,19,17,3,9,11,7,8,12,6,4,2,14,15,18],[17,2,1,6,9,19,18,14,4,11,12,13,16,5,8,7,3,10,15],[1,4,10,5,13,6,18,11,3,2,15,14,16,12,17,19,8,9,7],[2,14,3,12,16,17,11,9,1,6,5,19,10,13,4,18,7,15,8],[15,9,8,18,14,13,4,12,5,17,6,1,11,16,19,3,7,2,10],[15,8,12,16,13,2,6,19,18,14,10,5,11,9,7,1,3,17,4],[15,6,17,7,5,3,1,9,19,12,10,11,16,14,18,8,2,13,4],[6,11,10,14,2,13,16,1,9,15,8,19,17,3,5,18,7,4,12]];

$rows = count($matrix);
$cols = count($matrix[0]);
$hash_row = [];
$counter_row = 1;// 1 for the first row

$hash_col = [];
$counter_col = 1;// 1 for the first column

for ($i=0; $i < count($matrix[0]); $i++) 
{
    if(!isset($hash_row[$matrix[0][$i]])){
        $hash_row[$matrix[0][$i]] =  0;
    }
    $hash_row[$matrix[0][$i]]++;
}

for ($i=0; $i < $cols; $i++) 
{
    if(!isset($hash_col[$matrix[$i][0]])){
        $hash_col[$matrix[$i][0]] =  0;
    }
    $hash_col[$matrix[$i][0]]++;
}

for ($i=1; $i < $rows; $i++) 
{
    if(count($matrix[$i]) != count($hash_row))
    {
        return false;
    }
    $hash = [];
    $tem_counter = 0;
    for ($j=0; $j < $cols; $j++) 
    {
        if(!isset($hash[$matrix[$i][$j]]))
        {
            $hash[$matrix[$i][$j]] = 1;
        }else{
            $hash[$matrix[$i][$j]]++;
            $tem_counter++;
        }
    }

    if($hash_row == $hash)// if all elements on columns are exist in hash
    $counter_row++;
}

for ($i=1; $i < $rows; $i++) 
{
    if(count($matrix[$i]) != count($hash_col))
    {
        return false;
    }
    $hash = [];
    $tem_counter = 0;
    for ($j=0; $j < $cols; $j++) 
    {
        if(!isset($hash[$matrix[$j][$i]]))
        {
            $hash[$matrix[$j][$i]] = 1;
        }else{
            $hash[$matrix[$j][$i]]++;
            $tem_counter++;
        }
    }

    if($hash_col == $hash)// if all elements on columns are exist in hash
    $counter_col++;
}

if(($counter_row == $counter_col) && ($counter_row == count($matrix)))
    return true;
else
    return false;
?>