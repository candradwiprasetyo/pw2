<?php
session_start();
include 'admin/lib/config.php';
?>
<!DOCTYPE HTML>
<html><head>
		<title>Melon Development</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>

		<!-- css utama-->
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
        
		<!--  skill bar  -->
		<script src="js/skill-bar.js"></script>
		
        <!-- gallery-->
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>

        <!-- timeline -->
		<link rel="stylesheet" href="css/timeline.css"> <!-- Resource style -->
		
		<!-- portofolio -->
        <link rel="stylesheet" type="text/css" href="css/portofolio/elastic_grid.min.css" />

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
        
        <!-- start slider -->
        <link rel="stylesheet" type="text/css" href="css/slider.css" />
		<script type="text/javascript" src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">



			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
        <?php include 'css/css_config.php'?>
        
	</head>
	<body class="index loading">
	
		<?php include 'index/header.php'; ?>

		<?php include 'index/banner.php'; ?>
		
		<!-- Main -->
			<article id="main"><!-- One -->
          	
            <?php include 'index/about.php'; ?>

            
	
			</article>

			<?php include 'index/skill_bar.php'; ?>

			<?php include 'index/timeline.php'; ?>

			<?php include 'index/portofolio.php'; ?>

			<?php //include 'index/quote.php'; ?>
            
            <?php //include 'index/gallery.php'; ?>
            
            <?php include 'index/testimonial.php'; ?>
             
            <?php include 'index/map.php'; ?>
         	
			<?php include 'index/update.php'; ?>

            <?php include 'index/contact.php'; ?>

			
			<?php include 'index/footer.php'; ?>

			<!-- gallery -->
            <script src="js/imagesloaded.pkgd.min.js"></script>
			<script src="js/masonry.pkgd.min.js"></script>
            <script src="js/classie.js"></script>
            
            <script src="js/cbpGridGallery.js"></script>
           
            <script>
                new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
            </script>

		

	</body>

	
	
</html>