<?php
/*completed and sumbmitted - 100%
Hercy wants to save money for his first car. He puts money in the Leetcode bank every day.
He starts by putting in $1 on Monday, the first day. Every day from Tuesday to Sunday, he will put in $1 more than the day before. On every subsequent Monday, he will put in $1 more than the previous Monday.
Given n, return the total amount of money he will have in the Leetcode bank at the end of the nth day.

Example 1:
Input: n = 4
Output: 10
Explanation: After the 4th day, the total is 1 + 2 + 3 + 4 = 10.
Example 2:
Input: n = 10
Output: 37
Explanation: After the 10th day, the total is (1 + 2 + 3 + 4 + 5 + 6 + 7) + (2 + 3 + 4) = 37. Notice that on the 2nd Monday, Hercy only puts in $2.

Example 3:
Input: n = 20
Output: 96
Explanation: After the 20th day, the total is (1 + 2 + 3 + 4 + 5 + 6 + 7) + (2 + 3 + 4 + 5 + 6 + 7 + 8) + (3 + 4 + 5 + 6 + 7 + 8) = 96.
Constraints:
1 <= n <= 1000

*/
// $n = 4; //10
// $n = 10; //37
$n = 20; //96

$prev_monday = 1; // 1$
$prev_day = 0;
$rounds_detector = 0; // to detect monday after 7 days
$total_money = 0;

for ($i=0; $i < $n; $i++) 
{
    if($i == 0)
    {
        $total_money = 1;
        $prev_day = 1;
        $rounds_detector++;
    }elseif ($rounds_detector == 7)
    {
        $rounds_detector = 1;
        $prev_monday++;
        $prev_day = $prev_monday;
        $total_money += $prev_monday;
    }elseif ($rounds_detector < 8)
    {
        $prev_day++;
        $total_money += $prev_day;
        $rounds_detector++;
    }
}
echo $total_money;
?>