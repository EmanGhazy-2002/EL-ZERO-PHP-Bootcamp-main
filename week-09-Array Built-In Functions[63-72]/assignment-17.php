<?php

$nums = [1, 2, 3, 4, 5, 6];$result=[];
$random=[];
foreach ($nums as $item){
    $result =rand(0,count($nums)-1);
    $random[]=$nums[$result];
    array_splice($nums,$result,1);
}
echo "<pre>";
print_r($random);
echo "</pre>";