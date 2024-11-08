<?php

$chars = ["A", "B", "C"];


/*1-
echo "<pre>";
print_r(array_merge($chars,["D"]));
echo "</pre>";*/

/*2-
array_push($chars,"D");*/

/*3-
 * $chars[]="D";*/

array_splice($chars,count($chars),0,"D");

echo "<pre>";
print_r($chars);
echo "</pre>";