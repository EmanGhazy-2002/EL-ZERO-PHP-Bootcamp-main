<?php

$str = "<div><b>Elzero</b></div>";

$result = htmlspecialchars(strip_tags($str, "<b>"));

echo $result;