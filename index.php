<?php 
include 'config/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>My Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
    <h1>Posts</h1>
    <?php 
      $query = $db->prepare("SELECT * FROM myb_posts");
      print_r($query);
      while($row = $query->fetch(PDO::FETCH_ASSOC)){
    ?>
    <h1><?php $row['post_title'] ?></h1>
    <p><?php $row['post_content'] ?></p>

    <?php } ?>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>