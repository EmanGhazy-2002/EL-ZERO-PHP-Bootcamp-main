<?php



$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;


echo substr_count($str,$e,0,$four)."<br>";
echo substr_count(strtolower($str), strtolower($o), -$four);