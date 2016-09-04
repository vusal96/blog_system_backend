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
            <form  action="" method="post">
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
include "config.php";
if (isset($_POST["submit"])) {
            $title = $_POST["title"];
            $text = $_POST["text"];
            $target_dir = "images/";
            $target_file = rand().basename($_FILES["img"]["name"]);
            move_uploaded_file($_FILES['img']['tmp_name'], $target_dir.$target_file);
        $base= new Database ("localhost","root","","news");
        $query=$base->insert('new',$title,$target_file,$text);
        
        header('Location:../login/index.php');
}
?>