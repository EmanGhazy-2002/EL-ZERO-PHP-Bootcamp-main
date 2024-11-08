<?php


$nums = [10, 100, -20, 50, 30];
$maxnum = 0;

foreach ($nums as $num) {
    if($num>$maxnum){
       $maxnum= $num;
    }
}
echo $maxnum;

/*
$maxnum=array_reduce($nums,function($carry,$item) {
    return $item >$carry ?$item :$carry;
},$nums[0]);
echo $maxnum;*/
