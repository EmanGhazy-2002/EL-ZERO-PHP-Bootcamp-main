<?php


$a = "10";

echo $a;
echo '<br>';
echo gettype((int)$a);
echo '<br>';

echo $a;
echo '<br>';
echo gettype(intval($a));
echo '<br>';

echo +$a;
echo '<br>';
echo gettype(+$a);
echo '<br>';

echo $a;
echo '<br>';
settype($a,"integer");
echo gettype($a);
echo '<br>';

echo $a;
echo '<br>';
$aa=filter_var($a,FILTER_VALIDATE_INT);
echo gettype($aa);
echo '<br>';
