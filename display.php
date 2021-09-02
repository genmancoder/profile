<!DOCTYPE html>

<html>

	<head>
	
		<meta charset="utf-8">
	
	<title>John Paulin - Web Designer</title>
	
	
	<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	
	<link rel="stylesheet" href="styles/feature-carousel.css" charset="utf-8" />
	
    <script src="js/jquery-1.7.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.featureCarousel.min.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript">
      $(document).ready(function() {
        var carousel = $("#carousel").featureCarousel({
          // include options like this:
          // (use quotes only for string values, and no trailing comma after last option)
          // option: value,
          // option: value
        });

        $("#but_prev").click(function () {
          carousel.prev();
        });
        $("#but_pause").click(function () {
          carousel.pause();
        });
        $("#but_start").click(function () {
          carousel.start();
        });
        $("#but_next").click(function () {
          carousel.next();
        });
      });
    </script>
	
	
	</head>
	
	
	<body>
	
		<header>
		
		
			<div class="container clearfix">
			
				<a href="index.php" title="Return to Home Page=" id="logo">
					<img src="images/logo.png" width="210" alt="Logo"/>					
				</a>
				
		
				<nav>
			
					<ul>
						<li> <a href="about.php">About</a></li>
						<li class="selected"> <a href="portfolio.php">Portfolio</a></li>
						<li> <a href="resume.php">Resume</a></li>						
					
					</ul>
				
				</nav>
			</div>
		
					
		
		
		
		
		
		</header>
		
		
		
		
	
		
			<div id="hero">
			<div class="container clearfix">
			
			<div id="hero-title">		
				
					
					
					<section id="mycolumn-content">
				
				
				<div id="mycontent">
				
				
				
							<!-- -->
							
							
						
							 <div class="carousel-container">
    
      <div id="carousel">
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="images/samples/sample1.jpg"></a>
          <div class="carousel-caption">

          </div>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="images/samples/sample2.jpg"></a>
          <div class="carousel-caption">

          </div>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="images/samples/sample3.jpg"></a>
          <div class="carousel-caption">

          </div>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="images/samples/sample4.jpg"></a>
        </div>
        <div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="images/samples/sample5.jpg"></a>
          <div class="carousel-caption">

          </div>
        </div>
		<div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="images/samples/sample6.jpg"></a>
          <div class="carousel-caption">

          </div>
        </div>
		<div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="images/samples/sample7.jpg"></a>
          <div class="carousel-caption">
          </div>
        </div>
		<div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="images/samples/sample8.jpg"></a>
          <div class="carousel-caption">

          </div>
        </div>
		<div class="carousel-feature">
          <a href="#"><img class="carousel-image" alt="Image Caption" src="images/samples/sample9.jpg"></a>
          <div class="carousel-caption">

          </div>
        </div>
      </div>
    
      <div id="carousel-left"><img src="images/arrow-left.png" /></div>
      <div id="carousel-right"><img src="images/arrow-right.png" /></div>
    </div>
							
							
							
							
							
							<!--   -->
							
				
					
					
				
				</div>
				
				</section><!--- end column-content -->
					
				</div> <!-- end of hero-title -->
			
			</div>
			
				<div class="container clearfix">
				<div id="hero-image">				
				
				</div>			
				</div>
			</div> <!--- end hero -->
		
		
			<div class="container clearfix">
			<div class="divider">
			</div>
		</div>
		
			
		<?php
		
			include_once('footer.php');
		
		?>

	</body>



</html>
