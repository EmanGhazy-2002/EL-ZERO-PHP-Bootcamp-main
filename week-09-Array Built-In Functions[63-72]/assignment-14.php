<?php


$nums = [10, 100, -20, 50, 30];
$minnum = 0;

foreach ($nums as $num) {
    if ($num < $minnum) {
        $minnum = $num;
    }
}

echo $minnum;