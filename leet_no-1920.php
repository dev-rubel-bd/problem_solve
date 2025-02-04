<?php
function buildArray($nums) {
    $i="";
    $arrays=[];
    foreach($nums as $num){
        $arrays[$i]=$nums[$num];
        $i++;
    }
    return $arrays;
    
}
$nums=[2,3,0,4,1];
$result= buildArray($nums);
print_r($result);
?>