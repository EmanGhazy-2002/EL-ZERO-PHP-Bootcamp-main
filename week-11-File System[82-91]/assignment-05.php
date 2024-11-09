<?php

echo pathinfo(__FILE__, PATHINFO_BASENAME)."<br>";
echo basename(__FILE__)."<br>";
echo basename($_SERVER['PHP_SELF'])."<br>";
echo basename($_SERVER['SCRIPT_FILENAME'])."<br>";
echo basename($_SERVER['SCRIPT_NAME'])."<br>";
