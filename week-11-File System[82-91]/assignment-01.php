<?php


echo  number_format(disk_total_space("c:")/(1024**4),2)."<br>";
echo  number_format(disk_total_space("d:")/(1024**4),2);
