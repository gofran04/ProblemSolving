<?php
/*completed and sumbmitted
You are given an array of positive integers nums.
Alice and Bob are playing a game. In the game, Alice can choose either all single-digit numbers or all double-digit numbers from nums, and the rest of the numbers are given to Bob. Alice wins if the sum of her numbers is strictly greater than the sum of Bob's numbers.
Return true if Alice can win this game, otherwise, return false.

Example 1:
Input: nums = [1,2,3,4,10]
Output: false
Explanation:
Alice cannot win by choosing either single-digit or double-digit numbers.

Example 2:
Input: nums = [1,2,3,4,5,14]
Output: true
Explanation:
Alice can win by choosing single-digit numbers which have a sum equal to 15.

Example 3:
Input: nums = [5,5,5,25]
Output: true
Explanation:
Alice can win by choosing double-digit numbers which have a sum equal to 25.
*/

$nums = [1,2,3,4,10];// re false
// $nums = [1,2,3,4,5,14]; // re true
// $nums = [5,5,5,25];// re true

$tem = $nums;
$Alice = 0;
$Bob = 0;

for ($i=0; $i < count($nums); $i++) 
{
    if(strlen(strval($nums[$i])) == 1)
    {
        $Alice = $Alice + $nums[$i];
        array_splice($nums,$i,1);
        $i--;
    }
}

$Bob = array_sum($nums);
if($Alice > $Bob)
{
 echo "true";
}else{
    $Alice = 0;
    $Bob = 0;
    for ($i=0; $i < count($tem); $i++) 
    {
        if(strlen($tem[$i]) == 2)
        {
            $Alice = $Alice + $tem[$i];
            array_splice($tem,$i,1);
            $i--;
        }

    }

    $Bob = array_sum($tem);
    if($Alice > $Bob)
    {
        echo "true";
    }else{
        echo "false";
    }

}
?>