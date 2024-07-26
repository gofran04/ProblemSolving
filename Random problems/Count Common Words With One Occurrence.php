<?php
/*completed and sumbmitted - Got 100% on memory(20.64MB)
Given two string arrays words1 and words2, return the number of strings that appear exactly once in each of the two arrays.

Example 1:
Input: words1 = ["leetcode","is","amazing","as","is"], words2 = ["amazing","leetcode","is"]
Output: 2
Explanation:
- "leetcode" appears exactly once in each of the two arrays. We count this string.
- "amazing" appears exactly once in each of the two arrays. We count this string.
- "is" appears in each of the two arrays, but there are 2 occurrences of it in words1. We do not count this string.
- "as" appears once in words1, but does not appear in words2. We do not count this string.
Thus, there are 2 strings that appear exactly once in each of the two arrays.

Example 2:
Input: words1 = ["b","bb","bbb"], words2 = ["a","aa","aaa"]
Output: 0
Explanation: There are no strings that appear in each of the two arrays.
 
Example 3:
Input: words1 = ["a","ab"], words2 = ["a","a","a","ab"]
Output: 1
Explanation: The only string that appears exactly once in each of the two ar
*/

$words1 = ["leetcode","is","amazing","as","is"];
$words2 = ["amazing","leetcode","is"]; //should return 2 ("amazing","leetcode")

// $words1 = ["b","bb","bbb"]; $words2 = ["a","aa","aaa"];//return 0
// $words1 = ["a","ab"]; $words2 = ["a","a","a","ab"];//return 1

$counter = 0;
$common_arr = array_unique(array_intersect($words1,$words2));

$words1_values = array_count_values($words1);
$words2_values = array_count_values($words2);
$common_arr_values = array_count_values($common_arr);

foreach ($common_arr_values as $key => $value) 
{
  if(($common_arr_values[$key] == $words1_values[$key]) && ($common_arr_values[$key] == $words2_values[$key]))
    $counter++;
}

echo $counter;
// return $counter;
?>