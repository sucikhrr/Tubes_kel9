 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

   <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nouislider.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plyr.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/photoswipe.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/default-skin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/icon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/icon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/icon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/icon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/icon/apple-touch-icon-144x144.png">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Dmitry Volkov">
  <title>FlixGo – Online Movies, TV Shows & Cinema </title>

</head>
<body class="body">

	<!-- page 404 -->
	<div class="page-404 section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="page-404__wrap">
						<div class="page-404__content">
							<?php
    echo "<center><h1><font color='white'>".$_POST["judul"]; 
    echo "</h1>";
    echo "<h2>".$_POST["jam"];
    echo "</h2>";
    echo "<h3>".$_POST["seat"]."</h3>";
    echo "<h3>".$_POST["durasi"]." menit</h3>";
    echo "<h3>Rp.".$_POST["harga"]."</font></h3></center>";
  ?>
							<a href="<?php echo base_url();?>Client" class="page-404__btn">Main Menu</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end page 404 -->

  <!-- JS -->
  <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/wNumb.js"></script>
  <script src="<?php echo base_url();?>assets/js/nouislider.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plyr.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.morelines.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/photoswipe.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/photoswipe-ui-default.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>

</html>