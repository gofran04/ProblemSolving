<?php
/*completed and sumbmitted
Given two arrays of strings list1 and list2, find the common strings with the least index sum.
A common string is a string that appeared in both list1 and list2.
A common string with the least index sum is a common string such that if it appeared at list1[i] and list2[j] then i + j should be the minimum value among all the other common strings.
Return all the common strings with the least index sum. Return the answer in any order.

Example 1:
Input: list1 = ["Shogun","Tapioca Express","Burger King","KFC"], list2 = ["Piatti","The Grill at Torrey Pines","Hungry Hunter Steakhouse","Shogun"]
Output: ["Shogun"]
Explanation: The only common string is "Shogun".

Example 2:
Input: list1 = ["Shogun","Tapioca Express","Burger King","KFC"], list2 = ["KFC","Shogun","Burger King"]
Output: ["Shogun"]
Explanation: The common string with the least index sum is "Shogun" with index sum = (0 + 1) = 1.

Example 3:
Input: list1 = ["happy","sad","good"], list2 = ["sad","happy","good"]
Output: ["sad","happy"]
Explanation: There are three common strings:
"happy" with index sum = (0 + 1) = 1.
"sad" with index sum = (1 + 0) = 1.
"good" with index sum = (2 + 2) = 4.
The strings with the least index sum are "sad" and "happy".
*/


// $list1 = ["Shogun","Tapioca Express","Burger King","KFC"];
// $list2 = ["Piatti","The Grill at Torrey Pines","Hungry Hunter Steakhouse","Shogun"];//return ["Shogun"]

// $list1 = ["happy","sad","good"]; 
// $list2 = ["sad","happy","good"];//retutn ["sad","happy"]

// $list1 = ["Shogun","Tapioca Express","Burger King","KFC"];
// $list2 = ["KFC","Shogun","Burger King"]; //return ["Shogun"]

// $list1 =["Shogun", "Tapioca Express", "Burger King", "KFC"];
// $list2 =["KFC", "The Grill at Torrey Pines", "Tapioca Express", "Shogun"];

$list1 =["Shogun","Tapioca Express","Burger King","KFC"];
$list2 =["KFC","Shogun","Burger King"];//return ["Shogun"]

$ass_arr = [];

$common_arr = array_unique(array_intersect($list1,$list2));
$index_sum_len = count($common_arr);

if($index_sum_len == 1)
{
  print_r($common_arr);
}else{
  foreach ($common_arr as $key => $value) 
  {
    $sum = 0;

    $list1_index = array_search($value,$list1);
    $list2_index = array_search($value,$list2);
    
    $sum = $list1_index + $list2_index;
    $asso_arr["$list1_index"] = $sum;
  }

  $min = min($asso_arr);
  $values = array_count_values($asso_arr);

  $temp = [];

  if($values[$min] > 1)
  {
    foreach ($asso_arr as $key => $value) 
    {
      if($value == $min)
      array_push($temp,$list1[$key]);
    }
    print_r($temp);
  }else{
    $index = array_search($min,$asso_arr);
    array_push($temp,$list1[$index]);
    print_r($temp);
  }

}
?>