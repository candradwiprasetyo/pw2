<?php
session_start();
include 'admin/lib/config.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
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
        
		
        <?php include 'css/css_config.php'?>
        
	</head>
	<body class="index loading">
	
		

		<?php include 'index/header_blog.php'; ?>

		<!-- Main -->
			<article id="main"><!-- One -->
          	
            <?php include 'index/view_blog.php'; ?>

            
	
			</article>

			<?php include 'index/footer.php'; ?>

	</body>

	<!-- facebook like button -->
	
	
</html>