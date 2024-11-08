<?php


$nums = [10, 100, -20, 50, 30];
$minnum = 0;

foreach ($nums as $num) {
    if ($num < $minnum) {
        $minnum = $num;
    }
}

/*
$minnum=array_reduce($nums,function($carry,$item) {
    return $item <$carry ?$item :$carry;
 },$nums[0]);*/
echo $minnum;
