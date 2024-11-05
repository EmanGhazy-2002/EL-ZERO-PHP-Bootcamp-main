<?php


function check_status($a, $b, $c) {
    foreach (func_get_args() as $arg){
        if (gettype($arg)=="string"){
            $name=$arg;
        }elseif (gettype($arg)=="integer"){
            $age=$arg;
        }
        elseif (gettype($arg)=="boolean"){
            $available= $arg ?"Avilable":"Not Available";
        }
    }
    return "Hello $name, 
    Your Age Is $age,
     You Are $available For Hire";
}


echo check_status("Osama", 38, true)."<br>";
echo check_status(38, "Osama", true)."<br>";
echo check_status(true, 38, "Osama")."<br>";
echo check_status(false, "Osama", 38)."<br>";