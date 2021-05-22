<?php

include_once '../config/main/pageController.php';
include_once '../config/main/routes.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="description" content="My portfolio">
    <meta name="keywords" content="<?=$keys?>"/>
    <meta name='viewport' content='width=device-width, user-scalable=no'>
	  <link rel="icon" href="<?=$serve?>/assets/media/<?=$icoName?>.png">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta http-equiv="cache-control" content="3600" />
    <meta name="copyright" content="<?=$autor?>" />
    <meta name="robots" content="index,follow" />
    <meta name="author" content="<?=$autor?>">
    <meta charset="utf-8">
	  <title><?=$appName?></title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  	<!--Import Google Icon Font-->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- css styles import -->
    <link rel="stylesheet" href="<?=$serve?>/assets/styles/css/colores.css">
    <link rel="stylesheet" href="<?=$serve?>/assets/styles/css/padding.css">
    <link rel="stylesheet" href="<?=$serve?>/assets/styles/css/margin.css">
    <link rel="stylesheet" href="<?=$serve?>/assets/styles/css/st1.css">
    <link rel="stylesheet" href="<?=$serve?>/assets/styles/css/hw.css">
    <link rel="stylesheet" href="<?=$serve?>/assets/styles/css/fonts.css">
		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css' rel='stylesheet'>
		<!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <!-- aos -->
	  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
  	<!--Navbar -->
  	<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-main fixed-top scrolling-navbar">
      <div class="container-fluid">
        <a class="navbar-brand text-capitalize" href="<?=$serve?>/home">
          <?=$appName?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=$serve?>/About">About Me</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?=$serve?>/proyects">Projects</a></li>
                <!-- <li><a class="dropdown-item" href="<?=$serve?>/blog">Blog</a></li> -->
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="<?=$serve?>/CM">Contact Me</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- <form class="form-inline ml-auto" method="post">
          <div class="md-form my-0 color-1">
            <input class="form-control" type="text" name="search" placeholder="Buscar..." aria-label="Search">
          </div>
          <button class="btn btn-outline-white btn-md my-0 ml-sm-2" type="submit"><i class="fas fa-search"></i></button>
        </form> -->
      </div>
  	</nav>
	   <?=routes($serve, $appName, $autor, $ag, $ex)?>
  	<!-- Footer -->
  	<footer class="page-footer pt-2-r font-small bg-2">
  	  <div class="container text-center text-md-left">
  	    <div class="row">
  	      <div class="col-md-8 mt-md-0 mt-3">
  	        <h5 class="text-uppercase color-4"><?=$appName?></h5>
            <p class="text-uppercase color-4"><Span>Web and Desktop Developer</Span></p>
  	        <p class="color-4"></p>
  	      </div>
  	      <hr class="clearfix w-100 d-md-none pb-3">
  	      <div class="col-md-4 mb-md-0 mb-3 text-md-right">
  	        <h5 class="text-uppercase color-4">Links</h5>
  	        <ul class="list-unstyled list1">
              <li>
                <a href="<?=$serve?>/home" class="color-4">Home</a>
              </li>
              <li>
                <a href="<?=$serve?>/About" class="color-4">About Me</a>
              </li>
              <li>
                <a href="<?=$serve?>/proyects" class="color-4">Projects</a>
              </li>
              <li>
                <a href="<?=$serve?>/CM" class="color-4">Contact Me</a>
              </li>
  	        </ul>
  	      </div>
  	    </div>
  	  </div>
  	  <div class="footer-copyright text-center py-3 color-2 bg-main">©2021 
  	    <a href="http://www.kevao.tech" class="color-2"><?=$autor?></a>
  	  </div>
  	</footer>
  	<!-- Footer -->

  	<!-- aos -->
  	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	<script>
  		AOS.init();
  	</script>
  	<!-- Bootstrap tooltips -->
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  	<!-- Bootstrap core JavaScript -->
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  	<!-- MDB core JavaScript -->
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- script -->
    <!--<script src="<?=$serve?>/assets/js/index.js"></script> -->
  </body>
</html>