<?php 
$fn = './renaming_file.php';
$newfn = './file_renamed.php';
 
if(rename($fn,$newfn)){
 echo sprintf("%s was renamed to %s",$fn,$newfn);
}else{
 echo 'An error occurred during renaming the file';
}


?>