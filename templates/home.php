<?php
$pageTitle = "Home";
$page = "home";
include("header.php");
include("functions.php");
?>

  <div class="content-box">
    <!-- thumbnails -->
    <?php 
      $count = 0;
      foreach($catalog as $id => $book) {
        if ($book["front_page"] == true) {
          if ($count == 2) {
            echo  "<div class='large-4 columns item end'>"; 
          }
          else {
            echo  "<div class='large-4 columns item'>"; 
          }
          echo get_thumbnail_html($id, $book);
          $count ++;
        }
      } 
    ?>
  </div>


<?php 
include("footer.php");

