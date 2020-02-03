<?php

class StructureHTML{

	public function head(){
		echo '
			<!DOCTYPE html>
			<html lang="ES">
			<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
				<title>Arkana Coworking</title>
				
				<meta name="description" content="Arkana Coworking, trabajo colaborativo">
				<meta name="keywords" content="reunión, aeropuerto, túnel, Alquiler, Rionegro, trabajo, colaborativo, arkana, coworking, llanogrande, espacio, oficina, virtual">
				<meta name="Author" content="John Álvarez T">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<!-- Favicon -->
				<link href="img/LogoArkana.ico" rel="shortcut icon"/>

				<!-- Stylesheets -->
				<link rel="stylesheet" href="css/bootstrap.min.css"/>
				<link rel="stylesheet" href="css/font-awesome.min.css"/>
				<link rel="stylesheet" href="css/owl.carousel.min.css"/>

				<!-- Main Stylesheets -->
				<link rel="stylesheet" href="css/style.css"/>


<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150792560-1"></script>







				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
					<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
				<![endif]-->



			</head>
			<body>
		';
	}


	public function pieHTML(){
		echo '
				<!-- Footer section end -->
	
				
				<!--====== Javascripts & Jquery ======-->
				<script src="js/jquery-3.2.1.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/owl.carousel.min.js"></script>
				<script src="js/main.js"></script>

				</body>
			</html>
		';
	}

}