<?php
   include "connect.php";
   $id = $_GET['id'];
   if ($base->delete("news",$id)) {
      header("Location:admin.php");
   }else {
      echo "Error";
   }
 ?>
