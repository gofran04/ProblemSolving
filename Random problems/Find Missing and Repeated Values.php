<?php
/*completed and sumbmitted - matrix - hash table
You are given a 0-indexed 2D integer matrix grid of size n * n with values in the range [1, n2]. Each integer appears exactly once except a which appears twice and b which is missing. The task is to find the repeating and missing numbers a and b.
Return a 0-indexed integer array ans of size 2 where ans[0] equals to a and ans[1] equals to b.

Example 1:
Input: grid = [[1,3],[2,2]]
Output: [2,4]
Explanation: Number 2 is repeated and number 4 is missing so the answer is [2,4].

Example 2:
Input: grid = [[9,1,7],[8,9,2],[3,4,6]]
Output: [9,5]
Explanation: Number 9 is repeated and number 5 is missing so the answer is [9,5].
*/

// $grid = [[1,3],[2,2]];// re [2,4]
$grid = [[9,1,7],[8,9,2],[3,4,6]]; // re [9,5]

$rows = count($grid);
$cols = count($grid[0]);
$size = $rows * $cols;
$hash = [];
$result = [];

for ($i=1; $i <= $size; $i++) 
{
    $hash[$i] = 1;
}

for ($i=0; $i < $rows; $i++) 
{
    for ($j=0; $j < $cols; $j++) 
    {
        $hash[$grid[$i][$j]]++;
    }
}

arsort($hash);
foreach ($hash as $key => $value) 
{
    if($value > 2)
    array_push($result,$key);
    if($value == 1)
    array_push($result,$key);
}

print_r($result);
?>