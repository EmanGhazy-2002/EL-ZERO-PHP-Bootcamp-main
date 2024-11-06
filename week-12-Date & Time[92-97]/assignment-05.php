<?php



echo time() . "<br>";
echo strtotime('now') . "<br>";

$date= new DateTime();
echo $date->getTimestamp(). "<br>";

echo (int)microtime(true);
