<?php 
$pageTitle = $item["title"];
$page = "books";
include("header.php"); ?>

<?php
  if(empty($item["pages"]) and empty($item["issu"] )) {
    echo "<div class='row crumbs'><div class='small-12 columns'><p>This book is currently unavailable to view online</p></div></div>";
  }
  elseif(empty($item["pages"])) {
    echo "<div class='row issu'><div class='small-12 columns'>" . $item["issu"] . "</div></div>";
  }
  else {?>


  <div class="orbit" id="reader" role="region" aria-label="Reader" data-orbit>
    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span> &#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span> &#9654;&#xFE0E;</button>
    <ul class="orbit-container float-center">   
      <?php foreach ($page_imgs as $key) {
              if (is_array($key)) {
                foreach ($key as $id => $pages) {
                  if ($id == "0"){
                    echo "<li class='orbit-slide is-active'>"
                    . $pages
                    . "</li>";}
                  else {
                    echo "<li class='orbit-slide'>"
                    . $pages
                    . "</li>";}
          }
        }
      }?>
    </ul> 
    <nav class="orbit-bullets">
      <?php 
        foreach ($page_imgs as $key) {
          if (is_array($key)) {
            foreach($key as $id => $pages) {
              if ($id == "0") {
                echo '<button class="is-active" data-slide="'
                . $id
                . '"><span class="show-for-sr">Slide '
                . $id
                . 'details.</span><span class="show-for-sr">Current Slide</span></button>';}
              else {
                echo '<button data-slide="'
                  . $id
                  . '"><span class="show-for-sr">Slide '
                  . $id
                  . ' details.</span></button>';}
          }
        }
      }?>
    </nav>
  </div>
<?php ;} ?>


  <div class="row crumbs">
    <div class="small-12 columns">
      <ul class="breadcrumbs">
        <li><a href="/books">Books</a></li>
        <li><a href="/books/<?php echo strtolower(str_replace(' ', '-', $item['url_title']))?>"><?php echo $item["title"]; ?></a></li>
        <li class="current"><?php echo "Read " . $item["title"]; ?></li>
      </ul>
    </div>
  </div>



<?php 
include("footer.php");
