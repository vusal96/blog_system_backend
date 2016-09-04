<?php
   include "connect.php";
   $query = $base->all('news');

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
         <?php while ($row = mysqli_fetch_assoc($query)) { ?>
         <h1><?php echo $row['title'] ?></h1>
         <p><?php echo $row['text'] ?></p>
         <?php } ?>
      </div>
    </body>
 </html>