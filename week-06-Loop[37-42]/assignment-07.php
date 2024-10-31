<?php


$mix = [1, 2, "A", "B", "C", 3, 4];

$count=0;
$ignore=0;

foreach ($mix as $value){
 if(gettype($value)=="integer"){
        echo $value ."<br>";
        $count++;
    }else{
     $ignore++;
 }
}
echo $count ." Numbers Printed"."<br>";
echo $ignore." Letters Ignored"."<br>";
