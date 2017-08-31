<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Slo-Mo Books | " . $pageTitle; ?></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>


    <!-- navigation -->
    <div class="title-bar" data-responsive-toggle="slomo-menu" data-hide-for="medium">
        <a class="logo" data-toggle><img src="/img/slomologowhite.png" />
      <div class="title-bar-title">Menu</a></div>
    </div>


    <div class="top-bar" id="slomo-menu">
        <ul class="vertical medium-horizontal menu">
          <li><a class="logo hide-for-small-only" href="/home">
            <img src="/img/slomologowhite.png" />
          </a></li>
          <li <?php if ($page == 'home') {echo "class='active'";} ?>><a href="/home">Home</a></li>
          <li <?php if ($page == 'about') {echo "class='active'";} ?>><a href="/about">About</a></li>
          <li <?php if ($page == 'books') {echo "class='active'";} ?>><a href="/books">Books</a></li>
          <li <?php if ($page == 'stockists') {echo "class='active'";} ?>><a href="/stockists">Stockists</a></li>
        </ul>
    </div>
    <!-- content -->

<!-- class="show-for-small-only" -->