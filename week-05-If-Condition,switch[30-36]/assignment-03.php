<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>


<?php
$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"
// Needed To be Output
//"The Request Method Is Post And Username Is Osama"
//"This Username Osama Is Admin"

if($_SERVER['REQUEST_METHOD']=='POST'){

   echo "The Request Method Is Post And Username Is ".$_REQUEST['user'];

    if(in_array($_REQUEST['user'],$admins)){

        echo "This Username" .$_REQUEST['user'] ."Is Admin";
    }

}
