<?php 
require('config.php');

//Temp variables
$page_name = "Home";

?>

<!DOCTYPE html>
<html>
    <head>
      <title><?php echo $page_name . " - " . $title; ?></title>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
      <meta name="viewport" content="width=device-width" />
      <link rel="stylesheet" href="scripts/css/foundation.css">
      <link rel="stylesheet" href="scripts/css/app.css">
      <script src="scripts/js/vendor/modernizr.js"></script>
    </head>
    <body>

    <div class="fixed contain-to-grid navbar">
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <img src="images/symbol.png" id="logo" class="show-for-large-only">
            <h1 id="logo_name">Global Foundation for Children With Hearing Loss</h1>
          </li>
          <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li id="menu-icon" class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="volunteer.php">Volunteer</a></li>
            <li><a href="locations.php">Locations</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="media.php">Media</a></li>
            <button>Login</button>
          </ul>
          <!-- Left Nav Section -->
          <ul class="left">
            
          </ul>
        </section>
      </nav>
    </div>
