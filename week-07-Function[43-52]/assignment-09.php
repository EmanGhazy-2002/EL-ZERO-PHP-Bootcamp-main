<?php


// Write Function Content Here
/*
$greet= function ($name){
    return "Grettings,$name";
};*/


$greetarrow= fn($name)=>"Grettings,$name";
// Needed Output
//echo $greet("Osama"); // Greetings

echo $greetarrow("osama");