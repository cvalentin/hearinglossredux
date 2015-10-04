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
        <link rel="stylesheet" href="scripts/css/foundation.css">
      <!-- This is how you would link your custom stylesheet -->
      <link rel="stylesheet" href="scripts/css/app.css">
      <link rel="stylesheet" href="scripts/slick/slick.css">
      <link rel="stylesheet" href="scripts/slick/slick-theme.css">
      <script src="scripts/js/vendor/modernizr.js"></script>
      <script src="scripts/js/vendor/modernizr.js"></script>
    </head>
    <body>

    <div class="sticky">
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <img src="images/symbol.png" id="logo">
            <h1 id="logo_name">Global Foundation for Children With Hearing Loss</h1>
          </li>
          <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li id="menu-icon" class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Volunteer</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Donate</a></li>
            <li><a href="#">Media</a></li>
            <button>Login</button>
          </ul>
          <!-- Left Nav Section -->
          <ul class="left">
            
          </ul>
        </section>
      </nav>
    </div>

    <!--
        <nav class="top-bar data-topbar">
          <ul class="title-area">
            <li class="name">
              <h1><a href="#"><?php echo $title ?></a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
          </ul>
          <section class="top-bar-section">
            <ul class="title-area">
              Global Foundation for Children With Hearing Loss
            </ul>
            <ul class="right">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Volunteer</a></li>
              <li><a href="#">Locations</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Donate</a></li>
              <li><a href="#">Media</a></li>
              <button>Login</button>
            </ul>
          </section>
        </nav>
        -->