<?php

$parentDir = "Programming";
$childDir = "$parentDir/PHP";

if (!file_exists($parentDir)) {
    mkdir($parentDir, 0701);
}
if (!file_exists($childDir)) {
    mkdir($childDir, 0701);
}

function removeDirectory($dir) {
    if (file_exists($dir)) {
        rmdir($dir);
        echo "Directory $dir Removed\n";
    }
}
removeDirectory($childDir);
removeDirectory($parentDir);