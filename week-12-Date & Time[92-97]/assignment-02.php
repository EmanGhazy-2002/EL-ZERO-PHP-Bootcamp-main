<?php


date_default_timezone_set("Africa/Cairo");

$date = "2005-10-02";
$dateTime=  new DateTime($date);
$dateTime->add(new DateInterval('PT15H15M15S'));

echo date_default_timezone_get()."<br>";
echo $dateTime->format("Y, F,l 'd\\t\\h' H:i:s")."<br>";