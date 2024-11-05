<?php




function calculate(int $num_one, int $num_two):float {
//    return (double)($num_one + $num_two);
    return $num_one + $num_two;

}

echo calculate(20, 10)."<br>"; // 30
echo gettype(calculate(20, 10)); // Double