<?php
   include "connect.php";
   $query = $base->all('news');

   session_start();
      if ($_SESSION['login']==true){
         $_SESSION['ready']=true;
   }else{
      header('Location:../login/index.php');
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="bootstrap.css" media="screen" title="no title" charset="utf-8" type="text/css">
      <!-- <script src="//cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script> -->
   </head>
   <body>
      <div class="container">
         <center>
            <h1>Xos geldin Admin</h1>
            <a href="../login/logout.php" type="button" class="btn btn-warning" style="float: right; margin: -45px 15px 0 0;">Log out</a>
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>İD</th>
                     <th style="width:200px;">TİTLE</th>
                     <th>TEXT</th>
                     <th>TIME</th>
                     <th>CRUD</th>
                     <th>CLİCK</th>
                     <th>ACTİON</th>
                  </tr>
               </thead>
               <tbody>
                  <a class="btn btn-info btn-block" href="create.php" style="margin-bottom: 10px;">Create</a>
                  <?php while($row = mysqli_fetch_assoc($query)) {?>
                     <tr>
                        <?php foreach($row as $key =>$value) {?>
                           <td><?php echo $value ?></td>
                        <?php } ?>

                           <td>
                              <a class="btn btn-success" href="update.php?id=<?php echo $row['id']?>">Update</a>
                              <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">Delete</a>
                           </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
         </center>
      </div>

         <!-- <textarea name="editor1" class="ckeditor"></textarea>
         <script>
            CKEDITOR.replace( 'editor1' );
         </script> -->

   </body>
</html>