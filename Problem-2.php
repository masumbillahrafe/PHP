<?php
function reverse($number) {   
    $num = (string) $number;   
    $revstr = strrev($num);    
    $reverse = (int) $revstr;   
     return $reverse;  
}  
$l1 = [2, 4, 3];
$l1Number = implode($l1);
 $l1reverse = reverse($l1Number);

$l2 = [5, 6, 4];
$l2Number = implode($l2);
$l2reverse = reverse($l2Number);

$arraySum = $l1reverse+$l2reverse;

$x = array_map('intval', str_split($arraySum));
$result=[];
for($i=count($x)-1; $i>=0; $i--){
  array_push($result, $x[$i]);
}
print_r($result);




?>