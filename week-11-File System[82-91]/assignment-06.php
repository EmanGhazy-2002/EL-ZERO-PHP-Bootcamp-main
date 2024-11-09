<?php

//1
$file = fopen("elzero.txt", "r");
echo fgets($file);
echo fgets($file)."<br>";

//2
$lines= file('elzero.txt');
echo trim($lines[0])." ".trim($lines[1]) ."<br>";

//3
$content= file_get_contents('elzero.txt');
$line=explode("\n",$content);
echo trim($line[0])." ".trim($line[1]) ."<br>";

//4
$fileLine= file('elzero.txt');
$line2=array_slice($fileLine,0,2);
echo trim($line2[0])." ".trim($line2[1]) ."<br>";

//5
$fileLines= file('elzero.txt');
$lines2=array_splice($fileLines,0,2);
echo trim($lines2[0])." ".trim($lines2[1]) ."<br>";