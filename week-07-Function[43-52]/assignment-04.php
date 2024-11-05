<?php


function multiply(...$args){
    $count = 1;
    foreach ($args as $arg){
        if (gettype($arg) !== "string"){
            $count *=(int)$arg;
        }
    }
    return $count . "<br>";
}


echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
