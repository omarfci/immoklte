<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Meta -->
<meta charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >



<!-- Header -->
<header id="headers" class="absolute fullwidth light autofix">
    
  <div class="hidden-xs hidden-sm">
	<!-- Navigation Bar -->
	<div id="nav-bar">

		<!-- Logo -->
        <?php the_custom_logo(); ?>
		

		<nav class="module-group right">

			<!-- Primary Menu -->
			<div class="module menu left">
				<ul id="nav-primary" class="nav nav-primary">

                    <?php 
                        wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'container_location' => 'module-group',
                                    'items_wrap' => '<ul id="nav-primary" class="nav nav-primary">%3$s</ul>',
                                )
                            );
                    ?>




				</ul>

                

			</div>


			<!-- Search -->
			<div class="module search left">





                    <a class="clock-1" data-toggle="collapse"  href="#collapseOne" aria-expanded="false">
                    <span class="text-center clock-icon  icon-success"><i class="fa fa-clock-o"></i></span>

					</a>

                <a class="clock-1" data-toggle="collapse"  href="#emrg" aria-expanded="false">
                    <span class="text-center plus-icon  icon-danger"><i class="fa fa-plus"></i></span>

					</a>





			</div>




		</nav>

		<!-- Menu Toggle -->


	</div>
         </div>





    <!-- TIME SLIDE -->

      <div id="collapseOne" class="panel-collapse collapse usecolor z-index" role="tabpanel">
						  		<div class="panel-body">
                                        <h5 class="text-white">Hours by Appointment</h5>
						    	<ul class="list-lined text-white">


                                                <li><i class="ti-check  i-before"></i>Monday to Saturday  8:00 AM - 6:00 PM And one Sunday a month</li>
<!--                                                <li><i class="ti-check  i-before"></i>Saturday 9:00am - 07:00pm</li>-->

                                                <li>Please make sure to contact us for other appointments, including early mornings, late evenings and weekends for availability.  And thank you for being our patients.
</li>



                                        </ul>
						  		</div>
	</div>
	 <!-- TIME SLIDE -->


   <!-- PLUS SLIDE -->
    <div id="emrg" class="panel-collapse collapse z-index bg-white" role="tabpanel">

               <div class="redbg dark pt-10 pb-5 pl-15 pr-15 col-md-6">
                  <h5 style="margin-bottom: 5px;">Medical Emergencies</h5>

                   If you are experiencing
                    a MEDICAL emergency,
                   <br>
                       <strong> Please Call 911</strong> Or go to your nearest medical facility.

                </div>

                <div class="greybg  pt-10 pb-5 pl-15 pr-15 col-md-6">
                    <h5 style="margin-bottom: 5px;">Dental Emergencies</h5>
                    <strong> If you are experiencing a  DENTAL  emergency  <br> during regular business hours:<br>
                       Please call (239)   657 7007</strong>
                </div>



			</div>



     <!-- PLUS SLIDE -->




    <!-- MOBILE MENU   -->
    <div class="visible-xs visible-sm">
     <!-- Navbar -->
      <div class="navbar navbar-default  navbar-inverse " role="navigation">
        <div id="nav-bar" class="navbar-header">

        <a class="logo-wrapper" href="index.php">
			<img class="logo logo-dark logomain" src="assets/img/logo-dark.png" alt="">
		</a>

        <div class="pull-left">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        </div>
           <!-- Search -->
			<div class="module search right">

                    <a class="clock-1" data-toggle="collapse"  href="#collapseOne" aria-expanded="false">
                    <span class="text-center clock-icon  icon-success"><i class="fa fa-clock-o"></i></span>

					</a>

                <a class="clock-1" data-toggle="collapse"  href="#emrg" aria-expanded="false">
                    <span class="text-center plus-icon  icon-danger"><i class="fa fa-plus"></i></span>

					</a>
			</div>
        </div>
        <div class="navbar-collapse collapse scrollable-menu">
          <?php  $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
          <!-- Left nav -->
          <ul class="nav navbar-nav scrollable-menu">
            <li class="<?= ($activePage == 'index') ? 'active':''; ?>"> <a href="index.php"><span class="fa fa-home"></span> Home</a> </li>


            <li><a href="#"><span class="fa fa-info  text-danger"></span> &nbsp; Services <span class="caret"></span></a>
              <ul class="dropdown-menu">

                  <li><a href="dental-diagnostic.php"><span class="fa fa-arrow-right  text-success"> </span>  Diagnostic</a></li>

                  <li><a href=dental-others.php><span class="fa fa-arrow-right  text-success"> </span>   Braces and Orthodontics and Clear Aligners</a></li>

                <li><a href="dental-gumtherapy.php"><span class="fa fa-arrow-right  text-success"> </span>   Gum Therapy </a>

                </li>





                <li><a href="dental-restorative.php"><span class="fa fa-arrow-right  text-success"> </span>  Restorative </a>

                </li>

                  <li><a href="dental-Surgical.php"><span class="fa fa-arrow-right  text-success"> </span>   Surgical</a></li>




                 <li ><a  href="emergencydentists.php" aria-expanded="false" class="redli" >Dental Emergency Care </a>


              </ul>





                    <li>
						<a href="adspecial.php"> <i class="fa fa-file-text fa-lg text-orange"></i> Advertising Specials</a>

					</li>

                    <li >
						<a href="contact-form.php"> <i class="fa fa-envelope fa-lg text-yellow"></i> Contact</a>

					</li>



                    <li>
						<a href="download.php"> <i class="fa fa-download fa-lg text-green"></i> Downloads</a>

					</li>



              <li><a href="#"><span class="fa fa-plus-square-o fa-lg text-pink"></span> &nbsp; Fun Stuff  <span class="caret"></span></a>
                  <ul class="dropdown-menu">

                      <li>
                          <a href="review.php"> <i class="fa fa-star-o fa-lg text-danger"></i> Review</a>

                      </li>
                      <li>
                          <a href="gallery.php"> <i class="fa fa-picture-o fa-lg text-warning"></i> Gallery</a>

                      </li>

                      <li>
                          <a href="videos.php"> <i class="fa fa-file-video-o fa-lg text-info"></i> Videos</a>

                      </li>

                      <li>
                          <a href="excursions.php"> <i class="fa fa-camera-retro fa-lg text-success"></i> Excursions</a>

                      </li>



                  </ul>
              </li>


          </ul>



        </div>
      </div>
    </div>

     <!-- MENU  -->


      <!-- Top Bar -->
	<div id="top-bar" >
		<div class="col-md-6 col-xs-6 text-left pt-5">
            <ul class="list-inline">

                 <?php
                    $activePage = basename($_SERVER['PHP_SELF'], ".php");
                    if($activePage == "contact" || $activePage == "sub-form" ){
                 ?>


				<li><i class="fa fa-home text-white icon icon-sm "></i><a href="index.php"> Home</a></li>
                <?php }
                else {
                ?>

                 <li><i class="fa fa-map-marker text-white icon icon-sm "></i><a href="contact-form.php">Get Directions</a></li>
                <?php } ?>

			</ul>

           </div>

		<div class="col-md-6 col-xs-6 text-right pt-5 custom-sep">

			 <ul class="list-inline">

				<li><i class="i-before fa fa-phone text-white icon icon-sm"></i><a href="tel:2396577007">(239)   657 7007</a></li>
			</ul>
		</div>
	</div>
















</header>
<!-- Header / End -->


