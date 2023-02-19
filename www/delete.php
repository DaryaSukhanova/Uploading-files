<?php
header("Location: script.php");
   $fileDelete = $_POST['deleteFile'];
   //echo($_POST['deleteFile']);
   //unlink('img1.jpg');
   if (file_exists(dirname(__FILE__) . "//myFiles/" . $fileDelete)){
     unlink(dirname(__FILE__) . "//myFiles/" . $fileDelete); 
   }
   
?>