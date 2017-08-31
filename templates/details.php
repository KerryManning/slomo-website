<?php 
$pageTitle = "Books | " . $item["title"];
$page = "books";
include("header.php");
?>


  <div class="content-box" id="details">
    <div class="row book">

      <div class="small-12 columns">
        <ul class="breadcrumbs">
          <li><a href="/books">Books</a></li>
          <li class="current"><?php echo $item["title"]; ?></li>
        </ul>
      </div>
      
      <div class="small-12 columns booktext">
        <h1><?php echo $item['title']; ?></h1>
        <p><?php echo $item['artist'] ?></p>
      </div>


      <div class="large-4 columns end float-center item">
        <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>" />  
        <div class="detail-buttons show-for-large-only">      
          <?php
              if($item["pages"]  != "" or $item["issu"] != "") {
                if ($item["see"] == "read") {
                  ?>
                  <a href="/books/<?php echo strtolower(str_replace(' ', '-', $item['url_title'])); ?>/view" class="button">Read</a>
                  <?php 
                }
                elseif ($item["see"] == "preview") {
                  ?>
                  <a href="/books/<?php echo strtolower(str_replace(' ', '-', $item['url_title'])); ?>/view" class="button">Preview</a>
                  <?php 
                }
              }
          ?>
          <a href="stockists.php" class="button">Stockists</a>
        </div>
      </div>

      <div class="large-6 columns booktext">
        <p class="price"><?php echo $item['price']; ?> </p>
        <div id="info">
          <p><?php echo $item['summary'] ?></p>
        </div>
        <p><?php echo $item['blurb'] ?></p>
      </div>

      <div class="small-12 columns detail-buttons hide-for-large-only">      
          <?php
              if($item["pages"]  != null or $item["issu"] != null) {
                if ($item["see"] == "read") {
                  ?>
                  <a href="/books/<?php echo strtolower(str_replace(' ', '-', $item['url_title'])); ?>/view" class="button">Read</a>
                  <?php 
                }
                elseif ($item["see"] == "preview") {
                  ?>
                  <a href="/books/<?php echo strtolower(str_replace(' ', '-', $item['url_title'])); ?>/view" class="button">Preview</a>
                  <?php 
                }
              }
          ?>
          <a href="/stockists" class="button">Stockists</a>
        </div>

      </div>
    </div>
  </div>


<?php
include("footer.php");




