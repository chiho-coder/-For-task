<?php
function sum($max) {
 $result = 0;
  for($i = 1; $i <= $max; $i++) {
    $result += $i;
}

return $result;
}
echo sum(100);

function dble($num) {
    return $num*2;
}

echo dble."\n" ;

function pulse($a, $b) {
    return $a + $b ;
}
echo pulse(5,6)."\n";


$arr = array(1,3,5,7,9);
function times($arr){
$result = 1;
foreach ($arr as $arrs) {
    $result *= $arrs;
}
echo $result;
  }

times($arr)
?>