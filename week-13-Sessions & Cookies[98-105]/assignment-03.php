<?php


setcookie("site[color]", "blue", strtotime("2025-12-12T15:18:38Z"));
setcookie("site[layout]", "boxed", time()-1);
setcookie("site[font]", "swat", strtotime("2025-12-12T15:18:38Z"));



echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "Your Color Is " .$_COOKIE["site"]["color"] ." And Your font Is " .$_COOKIE["site"]["font"];