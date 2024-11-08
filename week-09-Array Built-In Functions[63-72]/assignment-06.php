<?php

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo "<pre>";
 print_r(array_pad($chars,count($chars) * strlen($char),$char[$zero]));
echo "</pre>";

/*
echo "<pre>";
print_r(array_pad($chars,10,$char[$zero]));
echo "</pre>";*/