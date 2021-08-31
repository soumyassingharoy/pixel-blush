<?php    $active= basename($_SERVER['REQUEST_URI']); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Pixel Blush Design Studio</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Favicons -->
       <link rel="icon" type="image/png" href="images/favicon.ico">
       <link href="images/apple-icon.png" rel="apple-touch-icon">

      <!--Googleapis Fonts-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <!--Style Sheet-->
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
      <link rel="stylesheet" href="css/ace-responsive-menu.css"/>
      <link rel="stylesheet" href="css/fakeLoader.min.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="css/responsive.css"/>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please 
         <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.
      </p>
      <![endif]-->
      <div class="fakeLoader">
         <div class="fl fl-spinner spinner1">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
         </div>
      </div>
      <header class="main_header">
         <div class="header_block clearfix">
            <div class="container-fluid ">
               <div class="logo"><a href="index.php"><img src="images/Logo.png" alt="Logo"/></a></div>
               <!-- Ace Responsive Menu -->
               <nav>
                  <!-- Menu Toggle btn-->
                  <div class="menu-toggle">
                     <button type="button" id="menu-btn">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <ul id="respMenu" class="ace-responsive-menu">
                     <li <?php if($active == "index.php" || $active == '') { echo "class='active'"; } ?>><a href="index.php">Home</a></li>
                     
                     <li <?php if($active == "services.php" || $active == '') { echo "class='active'"; } ?>><a href="services.php">Services</a></li>

                     <li <?php if($active == "about.php" || $active == '') { echo "class='active'"; } ?>><a href="about.php">About</a></li>
                     
                     <li <?php if($active == "our-clients.php" || $active == '') { echo "class='active'"; } ?>><a href="our-clients.php">Clients</a></li>
                     
                     <li <?php if($active == "contact.php" || $active == '') { echo "class='active'"; } ?>><a href="contact.php">Contact</a></li>

                     <li <?php if($active == "blog.php" || $active == '') { echo "class='active'"; } ?>><a href="blog.php">Blog</a></li>
                  </ul>
               </nav>
               <!-- End of Responsive Menu -->
            </div>
         </div>
      </header>