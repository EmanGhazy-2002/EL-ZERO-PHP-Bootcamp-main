<?php

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

/*
foreach ($nums as $num){
    echo "$num + $nums[$help_num] = " .
        ($num + $nums[$help_num]) ."<br>";

    $help_num --;
}*/

$length = count($nums);
foreach ($nums as $key=>$num){
    $opposit = $length-$key-1 ;
    $sum = $num + $nums[$opposit];
    echo "$num + " ."$nums[$opposit] = " . "$sum" ."<br>";

}
