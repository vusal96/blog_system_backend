<?php
   include "connect.php";
 ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="bootstrap.css" media="screen" title="no title" charset="utf-8" type="text/css">
   </head>
   <body>
      <div class="container">
         <div class="col-md-4 col-md-offset-3">
            <form  action="" method="post" enctype="multipart/form-data">
               <input class="form-control" type="title" name="title">
               <textarea class="form-control" name="text"></textarea>
               <input class="form-control" type="file" name="img">
               <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
         </div>
      </div>
   </body>
</html>




   <?php
    if (isset($_POST["submit"])) {
            $title = $_POST["title"];
            $text = $_POST["text"];
            $file = @$_FILES['img'];
            $target_dir = "../../images/";
            $target_file = date("YmdHis").basename($file["name"]);
            echo $target_file;
            move_uploaded_file($file['tmp_name'], $target_dir.$target_file  );
        $base= new Database ("localhost","root","","blog");
        $base->insert("INSERT INTO  `news` (`title`,`text`,`img`) VALUES ('$title','$text','$target_file')");
        
        header('Location:../crud/admin.php');
}
?>