<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slomo Books</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css">
  </head>
  <body>

    <!-- home content -->

    <!-- full page anchor link & logo -->
    <a href="/home">
      <div class="home-logo">
        <img src="img/slomologowhite.png" />
      </div>
    </a>

<?php 
$vid_array = array("video/slo1.mp4", "video/slo2.mp4", "video/slo3.mp4", "video/slo4.mp4", "video/slo5.mp4", "video/slo6.mp4", "video/slo7.mp4", "video/slo6.mp8", "video/slo9.mp4", "video/slo10.mp4", "video/slo11.mp4", "video/slo12.mp4");
$vid = array_rand($vid_array);
 ?>

      <!-- video background -->
      <div class="video-container">
        <div class="fullscreen-bg">
          <video id="video" loop muted autoplay poster="img/landing/lg-slomopic.png" class="fullscreen-bg__video">
              <source src="<?php echo $vid_array[$vid]; ?>" type="video/mp4">
              <p>Your browser doesn't support HTML5 video.
              <a href="<?php echo $vid_array[$vid]; ?>">Download</a> the video instead.
              </p>
          </video>
        </div>
      </div>


      
      <!-- video sound controls -->
      <div id="video-mute">
        <button type="button" id="mute"><i id="icon" class="fi-volume-strike"></i></button>  
      </div>

<?php
include("inc/footer.php");