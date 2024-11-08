<?php


$nums = [11, 2, 10, 7, 20, 50];
$count = 0;

foreach ($nums as $num) {
    $count+=$num;
}

echo $count;