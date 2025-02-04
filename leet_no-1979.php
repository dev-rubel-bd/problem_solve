<?php
function findGCD($nums) {
    $x = max($nums);
    $y = min($nums);
    
    while ($y != 0) {
        $z = $y;
        $y = $x % $y;
        $x = $z;
    }
    return $x;
}

$nums = [7,5,6,8,3];
$result = findGCD($nums);
var_dump($result);
?>