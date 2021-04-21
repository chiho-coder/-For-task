<?php
$name = "KONO CHIHO";
if ($name == "KONO CHIHO") {
echo "私は".$name."です。";
} else if ($name !== "KONO CHIHO") {
 echo "私は".$name."ではありません。";
}
echo "\n";

$total = 0;
for ($i = 0; $i <=1000; $i++) {
    $total += $i;
}
echo $total;

echo "\n";

$fruit = array ("Mango","Kiwi","lemon");
foreach ($fruit as $fruits) {
echo $fruits.'';
}

echo "\n";

$start = 1;
$end = 100;
for ($i = $start; $i<= $end; $i++) {
if ($i % 5 == 0) {
 echo $i;
 echo "\n";
 }
}