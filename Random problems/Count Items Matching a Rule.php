<?php
/*completed and sumbmitted
You are given an array items, where each items[i] = [typei, colori, namei] describes the type, color, and name of the ith item. You are also given a rule represented by two strings, ruleKey and ruleValue.
The ith item is said to match the rule if one of the following is true:
ruleKey == "type" and ruleValue == typei.
ruleKey == "color" and ruleValue == colori.
ruleKey == "name" and ruleValue == namei.
Return the number of items that match the given rule.

Example 1:
Input: items = [["phone","blue","pixel"],["computer","silver","lenovo"],["phone","gold","iphone"]], ruleKey = "color", ruleValue = "silver"
Output: 1
Explanation: There is only one item matching the given rule, which is ["computer","silver","lenovo"].

Example 2:
Input: items = [["phone","blue","pixel"],["computer","silver","phone"],["phone","gold","iphone"]], ruleKey = "type", ruleValue = "phone"
Output: 2
Explanation: There are only two items matching the given rule, which are ["phone","blue","pixel"] and ["phone","gold","iphone"]. Note that the item ["computer","silver","phone"] does not match.

*/

// $items = [["phone","blue","pixel"],["computer","silver","lenovo"],["phone","gold","iphone"]];
// $ruleKey = "color"; $ruleValue = "silver"; //return 1-->["computer","silver","lenovo"]

$items = [["phone","blue","pixel"],["computer","silver","phone"],["phone","gold","iphone"]];
$ruleKey = "type"; $ruleValue = "phone";//return 2-->"phone","blue","pixel"] and ["phone","gold","iphone"]
$arrlen = count($items);
$counter = 0;

switch ($ruleKey) {
  case 'type':
    for ($i=0; $i < $arrlen; $i++) 
    {
      if($items[$i][0] == $ruleValue)
      $counter++;
    }
    break;
  
  case 'color':
    for ($i=0; $i < $arrlen; $i++) 
    {
      if($items[$i][1] == $ruleValue)
      $counter++;
    }
    break;

  case 'name':
    for ($i=0; $i < $arrlen; $i++) 
    {
      if($items[$i][2] == $ruleValue)
      $counter++;
    }
    break;
}

  echo  $counter ;
  // return  $counter ;
?>