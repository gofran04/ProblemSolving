<?php
/*completed and sumbmitted
You are given an integer array nums. In one operation, you can add or subtract 1 from any element of nums.
Return the minimum number of operations to make all elements of nums divisible by 3.

Example 1:
Input: nums = [1,2,3,4]
Output: 3
Explanation:
All array elements can be made divisible by 3 using 3 operations:
Subtract 1 from 1.
Add 1 to 2.
Subtract 1 from 4.

Example 2:
Input: nums = [3,6,9]
Output: 0
*/

// $nums = [1,2,3,4];//should return 3
$nums = [3,6,9];//should return true0
$arrlen = count($nums);
$counter = 0;

for ($i=0; $i < $arrlen; $i++) 
{ 
  if($nums[$i] % 3 ==0 ){
    continue;
  }else{
    if(($nums[$i]+ 1) % 3 == 0){
      $counter++;
    }elseif(($nums[$i]-1) % 3 == 0){
      $counter++;
    }
  }
}
  echo $counter;
  //  return $counter;
?>