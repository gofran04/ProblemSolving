<?php
/*completed and sumbmitted - matrtix
There is a snake in an n x n matrix grid and can move in four possible directions. Each cell in the grid is identified by the position: grid[i][j] = (i * n) + j.
The snake starts at cell 0 and follows a sequence of commands.
You are given an integer n representing the size of the grid and an array of strings commands where each command[i] is either "UP", "RIGHT", "DOWN", and "LEFT". It's guaranteed that the snake will remain within the grid boundaries throughout its movement.
Return the position of the final cell where the snake ends up after executing commands.
Example 1:
Input: n = 2, commands = ["RIGHT","DOWN"]

Example 2:
Input: n = 3, commands = ["DOWN","RIGHT","UP"]
Output: 1
*/

$n = 2; $commands = ["RIGHT","DOWN"]; // re 3

$c_len = count($commands);
$matrix = [];

for ($i=0; $i < $n; $i++) 
{
    for ($j=0; $j < $n; $j++) 
    {
        $matrix[$i][$j] = ($i * $n) + $j;  
    }
}
$i = 0; $j = 0;
for ($k=0; $k < $c_len; $k++) 
{
    switch ($commands[$k])
    {
        case 'RIGHT':
            $j++;
            break;
        case 'LEFT':
            $j--;
            break;
        case 'DOWN':
           $i++;
            break;
        case 'UP':
            $i--;
            break;
    }
}
echo $matrix[$i][$j];
?>