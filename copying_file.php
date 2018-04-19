<?php

 $fn = './copying_file.php';    
 $newfn = './copied_file.php'; 
 
 if(copy($fn,$newfn))
 echo 'The file was copied successfully';
 else
 echo 'An error occurred during copying the file';


?>