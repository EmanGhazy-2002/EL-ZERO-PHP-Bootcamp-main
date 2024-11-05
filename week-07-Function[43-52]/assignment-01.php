<?php
// Write Function Content Here
function greeting($name,$status=0){
  if($status =="Male"){
      echo "Hello Mr ".$name ."<br>";
  }   elseif ($status =="Female"){
      echo "Hello Miss ".$name ."<br>";
  }else{
      echo "Hello ".$name ."<br>";
  }
}

echo greeting("Osama", "Male");
echo greeting("Eman", "Female");
echo greeting("Sameh");