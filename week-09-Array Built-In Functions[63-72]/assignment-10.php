<?php

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

//$mix=array_filter($mix, 'is_numeric');


array_splice($mix, count($nums), count($nums));
$mix=array_merge($mix, $nums);
sort($mix);


echo "<pre>";
print_r($mix);
echo "</pre>";

