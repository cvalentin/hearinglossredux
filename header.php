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

      <script src="scripts/js/vendor/modernizr.js"></script>
    
    </head>
    <body>           
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
             
            <li class="name">
              <h1>
                <a href="#">
                  <?php echo $title ?>
                </a>
              </h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
          </ul>
       
          <section class="top-bar-section">
             
            <ul class="right">
              <li><a href="#">Main Item 1</a></li>
              <li class="divider"></li>
              <li><a href="#">Main Item 2</a></li>
              <li class="divider"></li>
              <li class="has-dropdown">
                <a href="#">Main Item 3</a>
                <ul class="dropdown">
                  <li><a href="#">Dropdown Option</a></li>
                  <li><a href="#">Dropdown Option</a></li>
                  <li><a href="#">Dropdown Option</a></li>
                  <li class="divider"></li>
                  <li><a href="#">See all →</a></li>
                </ul>
              </li>
            </ul>
          </section>
        </nav>