<?php


function change_permissions($file)
{
    if(is_dir($file)){
        return "This Is Directory And Only Files Allowed";
    }

    if(pathinfo($file,PATHINFO_EXTENSION)!=='txt'){
        return "File Extension Is Not Txt";
    }

    if (chmod($file,0700)){
        return "Permissions Changed";
    }else{
          return "Failed to Change Permissions";
    }

}

echo change_permissions("Elzero") . "<br>";    // Output: This Is Directory And Only Files Allowed
echo change_permissions("Work.docx") . "<br>"; // Output: File Extension Is Not Txt
echo change_permissions("Result.txt") . "<br>"; // Output: Permissions Changed