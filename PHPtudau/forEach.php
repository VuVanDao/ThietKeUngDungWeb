<?php
$arr = [1,2,3,4,5,6,7,8];

foreach ($arr as $x) {
  echo "$x <br>";
}
$new = array(9,10,11,12,13,14,15);
print_r($new);
echo count($new);
$new[]=16;
print_r($new);
unset($new[0]);
print_r($new);
echo '<br/>';
$a = array(3,6,1,3,6,2,8,5,9);
 sort($a);
print_r($a);
 rsort($a);
print_r($a);

?>