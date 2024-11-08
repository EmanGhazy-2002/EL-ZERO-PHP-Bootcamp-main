<?php


$nums = [5, 10, 20, 5, 30, 40];

$result= array_sum(array_filter($nums,function ($num){
    return $num!==5;
}));

echo $result;


/*
$sum = 0;
foreach ($nums as $num) {
    if ($num == "5") {
        continue;
    }
    $sum += $num;
}

echo $sum;*/