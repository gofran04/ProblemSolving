<?php
/*
completed and sumbmitted
A school is trying to take an annual photo of all the students. The students are asked to stand in a single file line in non-decreasing order by height. Let this ordering be represented by the integer array expected where expected[i] is the expected height of the ith student in line.
You are given an integer array heights representing the current order that the students are standing in. Each heights[i] is the height of the ith student in line (0-indexed).
Return the number of indices where heights[i] != expected[i]

Input: heights = [1,1,4,2,1,3]
Output: 3
Explanation: 
heights:  [1,1,4,2,1,3]
expected: [1,1,1,2,3,4]
Indices 2, 4, and 5 do not match.
-----------------------------------------------------
Input: heights = [5,1,2,3,4]
Output: 5
Explanation:
heights:  [5,1,2,3,4]
expected: [1,2,3,4,5]
All indices do not match.
*/

//$heights = array(5,4,3,6,1,2);
//$heights = array(1,1,4,2,1,3);
$heights = array(1,2,3,4,5);
$nums2 = array();
$counter = 0;

// copy array to another array
for ($n=0; $n < count($heights) ; $n++) 
{
    $nums2[$n] = $heights[$n];

}
 
//this loop to sort the array, i can use sort($arr) method to sort the array
for ($i=0; $i < count($nums2) ; $i++) 
{
    $min = $nums2[$i];
    for ($j=$i+1; $j < count($nums2) ; $j++) 
    {
        if ($nums2[$j] < $min)
        {
            $min = $nums2[$j];

            $temp = $nums2[$i] ;
            $nums2[$i] = $nums2[$j];
            $nums2[$j] = $temp; 
            
        }
    } 
}

//this loop the compare the sorted and unsorted to get how many kids does not set in their correct place
for ($c=0; $c < count($heights) ; $c++) 
{
    if ($heights[$c] != $nums2[$c])
        $counter++;
}
 
echo "counter: ". $counter;

?>