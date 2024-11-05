<?php



function calculate($num1,$num2,$param="a"){
    if($param=="s" ||$param=="subtract"){
        return $num1-$num2;
    } elseif($param=="a"||$param=="add"){
        return $num1+$num2;
    }elseif($param=="m"||$param=="multiply"){
        return $num1*$num2;
    }else{
        return "Invalid operation";
    }
}



echo calculate(10, 20)."<br>"; // 30
echo calculate(10, 20, "a")."<br>"; // 30
echo calculate(10, 20, "s")."<br>"; // -10
echo calculate(10, 20, "subtract")."<br>"; // -10
echo calculate(10, 20, "multiply")."<br>"; // 200
echo calculate(10, 20, "m")."<br>"; // 200