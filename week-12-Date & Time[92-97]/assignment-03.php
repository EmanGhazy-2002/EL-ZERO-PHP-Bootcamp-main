<?php

date_default_timezone_set('Africa/Cairo');

$date = "1990-10-01";
$epoch = new DateTime("1970-01-01");
$dateTime = new DateTime($date);

$days = $epoch->diff($dateTime)->days;
$years = $days / 365.25;

echo "From Epoch Time Till $date Is Approximately " . number_format($days, 1) . " Days"."<br>";
echo "From Epoch Time Till $date Is Approximately " . number_format($years, 1) . " Years";
