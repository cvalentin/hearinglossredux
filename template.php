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
       
         
       
        <div class="row">
          <div class="large-12 columns">
       
           
       
            <div class="row">
              <div class="large-12 hide-for-small">
       
                <div id="featured" data-orbit>
                    <img src="http://placehold.it/1200x500&text=Slide Image 1" alt="slide image">
                    <img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
                    <img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
                  </div>
       
            </div>
          </div>
       
           
       
           
       
            <div class="row">
              <div class="large-12 columns show-for-small">
       
                <img src="http://placehold.it/1200x700&text=Mobile Header">
       
              </div>
            </div><br>
       
           
       
       
            <div class="row">
              <div class="large-12 columns">
                <div class="row">
                   
                  <div class="large-4 small-6 columns">
       
                    <h4>Upcoming Shows</h4><hr>
       
                    <div class="row">
                      <div class="large-1 column">
                        <img src="http://placehold.it/50x50&text=[img]">
                      </div>
       
                      <div class="large-9 columns">
                        <h5><a href="#">Venue Name</a></h5>
                        <h6 class="subheader show-for-small">Doors at 00:00pm</h6>
                      </div>
                    </div><hr>
       
                    <div class="hide-for-small">
                      <div class="row">
                        <div class="large-1 column">
                          <img src="http://placehold.it/50x50&text=[img]">
                        </div>
       
                        <div class="large-9 columns">
                          <h5 class="subheader"><a href="#">Venue Name</a></h5>
                        </div>
                      </div><hr>
       
                      <div class="row">
                        <div class="large-1 column">
                          <img src="http://placehold.it/50x50&text=[img]">
                        </div>
       
                        <div class="large-9 columns">
                          <h5 class="subheader"><a href="#">Venue Name</a></h5>
                        </div>
                      </div><hr>
       
                      <div class="row">
                        <div class="large-1 column">
                          <img src="http://placehold.it/50x50&text=[img]">
                        </div>
       
                        <div class="large-9 columns">
                          <h5 class="subheader"><a href="#">Venue Name</a></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                   
       
       
                   
       
                  <div class="large-4 small-6 columns">
                    <img src="http://placehold.it/300x465&text=Image">
                  </div>
       
                   
       
       
                   
       
                  <div class="large-4 small-12 columns">
       
                    <h4>Blog</h4><hr>
                    <div class="panel">
                      <h5><a href="#">Post Title 1</a></h5>
       
                      <h6 class="subheader">
                        Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
                      </h6>
       
                      <h6><a href="#">Read More »</a></h6>
                    </div>
       
                    <div class="panel hide-for-small">
                      <h5><a href="#">Post Title 2 »</a></h5>
                    </div>
       
                    <div class="panel hide-for-small">
                      <h5><a href="#">Post Title 3 »</a></h5>
                    </div>
       
                    <a href="#" class="right">Go To Blog »</a>
       
                  </div>
       
                   
       
                </div>
              </div>
            </div>
       
           
       
       
           
       
            <?php include("footer.php"); ?>
       
           
       
          </div>
        </div>
       

        <script src="scripts/js/vendor/jquery.js"></script>
        <script src="scripts/js/foundation.min.js"></script>
        <script>
          $(document).foundation();
        </script>
       
    
    

    </body>
</html>
