<?php

$fileContent = file("elzero.txt");

$fileContent = str_replace("Osamaa", "Elzero", $fileContent);
file_put_contents("elzero.txt", $fileContent);


echo file_get_contents("elzero.txt");