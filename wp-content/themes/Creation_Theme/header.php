<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Wordpress</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS -->

  <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/css/style.css">


  <!-- bootstrap -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

  <!-- icon -->
  <script src="https://use.fontawesome.com/4d141429f4.js"></script>
  <script src="https://use.fontawesome.com/20daec240b.js"></script>



</head>


<body>

  <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
  <header id="header" class="container-fluid ">




    <!-- PARTIE HAUTE -->
    <section class="container-fluid fixed-top ">
      <!-- DESKTOP -->
      <div class="row desktop align-items-center d-flex justify-content-around hidden-xs-down bg-primary">

        <!-- logo -->
        <a href="index.html">
          <figure class="p-relative my-2 mw-100">
            <img class="w-100" src="https://www.astrazeneca.fr/etc/designs/az/img/logo-az-condensed.png.pagespeed.ce.2AusmX0R-T.png" alt="bootstrap">
          </figure>
        </a>

        <div class="menu">

            <?php wp_nav_menu();?>

        </div>

        <!-- recherche -->

        <form class="row search-form">
          <div class="form-group has-feedback mb-0">
            <input type="text" class="form-control" name="search" id="search" placeholder="Recherche">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
          </div>
          <i class="ml-2 text-white fa fa-search fa-2x" aria-hidden="true"></i>
        </form>


      </div>
      <!-- fin desktop -->



      <!-- PHONE -->
      <div class="row hidden-sm-up">

        <nav class="pb-0 d-flex justify-content-around w-100 navbar  navbar-toggleable-md navbar-light bg-primary ">

          <button class="mx-5 navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" tabindex="-1">
            <span class=" navbar-toggler-icon"></span>
          </button>

          <!-- logo -->
          <a class="mx-5" href="#">
            <figure class="p-relative ">
              <img class="" src="https://www.astrazeneca.fr/etc/designs/az/img/logo-az-condensed.png.pagespeed.ce.2AusmX0R-T.png" alt="bootstrap">
            </figure>
          </a>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="h4 ml-5 nav-link" href="index.html">Blog </a>
              </li>
              <li class="nav-item">
                <a class="h4 ml-5 nav-link" href="page/contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="h4 ml-5 nav-link" href="#">A propos</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Recherche">
            </form>
          </div>

        </nav>
      </div>
      <!-- fin phone -->

    </section>
    <!-- fin partie haute -->
