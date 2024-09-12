<?php
/*completed and sumbmitted - matrix
Given a m x n matrix grid which is sorted in non-increasing order both row-wise and column-wise, return the number of negative numbers in grid.
Example 1:
Input: grid = [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]]
Output: 8
Explanation: There are 8 negatives number in the matrix.

Example 2:
Input: grid = [[3,2],[1,0]]
Output: 0
*/

$grid = [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]];// re 8

$rows = count($grid);
$cols = count($grid[0]);
$counter = 0;

for ($i=0; $i < $rows; $i++) 
{
    for ($j=0; $j < $cols; $j++) 
    {
        if($grid[$i][$j] < 0)
        $counter++;
    }
}

echo $counter;
?>