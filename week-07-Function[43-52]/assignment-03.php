<?php


function sum_all(...$args){
    $count=0;
    foreach ($args as $arg){
        if ($arg == "5"){
            continue;
        }elseif ($arg =="10"){
            $count +=20;
        }else{
            $count+=$arg;
        }
    }
    return $count ."<br>";
}

echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40