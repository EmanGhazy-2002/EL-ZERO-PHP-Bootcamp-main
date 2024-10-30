<?php

$name = "Osama";
$age = 40;
$country = "Egypt";
/*
if ($age > 18) {
    echo "The Age Is Good To Go<br>";
    if (gettype($name) === "string") {
        echo "The Name Is Good To Go<br>";
        if ($country === "Egypt") {
            echo "The Country Is Good To Go<br>";
        }
    }
}*/

// Needed To be Output
//"The Age Is Good To Go"
//"The Name Is Good To Go"
//"The Country Is Good To Go"

($age > 18 && gettype($name) === "string" && $country === "Egypt") ?
print ("The Age Is Good To Go<br>The Name Is Good To Go<br>The Country Is Good To Go<br>")
    : null ;