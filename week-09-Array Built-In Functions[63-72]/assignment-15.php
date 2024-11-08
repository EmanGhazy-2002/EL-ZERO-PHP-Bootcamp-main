<?php

$chars = ["o", "r", "e", "z", "l", "E"];

/*$result = $chars[5] . $chars[4] . $chars[2] . $chars[3] . $chars[1] . $chars[0];
echo $result;*/

for ($i = count($chars); $i > 0; $i--) {
    echo $chars[$i-1];
}