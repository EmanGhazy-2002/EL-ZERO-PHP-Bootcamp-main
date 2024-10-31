<?php


$num = 2;
while ($num < 520) {

    if ($num == 2) {
        $num--;
        echo "<div>1</div>";
    }
    if ($num == 382) {
        break;
    }

    $num = (2 * $num) + 2;
    echo $num. "<br>";
}
