<?php
$pageTitle = "Books";
$page = "books";
include("header.php");
include("functions.php");
 ?>

  <div class="content-box">
    <div class="row expanded" data-equalizer data-equalize-by-row="true">
    <!-- thumbnails -->
    <?php foreach($catalog as $id => $book) {
            $lastBook = end($catalog);
              if ($book["title"] == $lastBook["title"]) {
              echo  "<div class='large-3 columns item end' data-equalizer-watch>"; 
                }
              else {
              echo  "<div class='large-3 columns item' data-equalizer-watch>"; 
              }
            echo get_thumbnail_html($id, $book);
        } ?>
    </div>
  </div>


<?php 
include("footer.php");

