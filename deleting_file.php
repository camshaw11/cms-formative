<?php 
$fn = './deleting_file.php';

if(unlink($fn)){
 echo sprintf("The file %s deleted successfully",$fn);
}else{
 echo sprintf("An error occurred deleting the file %s",$fn);
}