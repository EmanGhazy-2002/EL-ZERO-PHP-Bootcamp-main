<?php

$num_one = 23;
$num_two = 5;
$op = "+";

if($op == "+"){
    echo $num_one+$num_two;
}
else if($op == "-"){
    echo $num_one-$num_two;
}
// / Operator
else if($op == "/"){
    $rem =(int)($num_one/$num_two);
    echo $rem."<br>";
    echo ($num_one/$num_two)-$rem ;
}
else if($op == "*"){
    echo $num_one*$num_two;
}
else{
    echo "Unknown Operation";
}

