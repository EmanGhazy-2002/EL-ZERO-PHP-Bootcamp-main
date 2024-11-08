<?php


$nums = [10, 100, -20, 50, 30];
$maxnum = 0;

foreach ($nums as $num) {
    if($num>$maxnum){
       $maxnum= $num;
    }
}

echo $maxnum;