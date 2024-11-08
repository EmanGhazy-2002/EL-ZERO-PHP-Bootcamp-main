<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];


echo "<pre>";
print_r(array_change_key_case(array_combine($codes,$means)));
echo "</pre>";