<?php


$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$result=[];
foreach ($mix as $item){
    if(gettype($item)!="string"&& $item%2!=0){
        array_push($result,$item);
    }
}
echo "<pre>";
print_r($result);
echo "</pre>";