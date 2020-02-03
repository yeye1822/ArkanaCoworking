<?php 
      if( $_GET['tit'] == 'Inaguración' ){
?>

<section class="page-top-section set-bg" data-setbg="img/blog/headerApertura.jpg">

<?php }elseif ($_GET['tit'] == 'ExpoCoworking') { ?>
	

<section class="page-top-section set-bg" data-setbg="img/blog/headerExpo.jpg">

<?php }elseif ($_GET['tit'] == 'Llanogrande') { ?>
	

<section class="page-top-section set-bg" data-setbg="img/sedes/llanogrande/header.jpg">

<?php }else{ ?>

<section class="page-top-section set-bg" data-setbg="img/sedes/portanova/header.jpg">

<?php } ?>
		<h2><?php echo str_replace("_"," ",$_GET['tit']) ?></h2>
		<div class="hero-social-warp">
			<p>Nuestras Redes Sociales</p>
			<div class="hero-social-links">
				<a href=""><i class="fa fa-linkedin"></i></a>
				<a href="https://www.instagram.com/divrkanacoworking/" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="https://www.facebook.com/divrkana-Coworking-106267884068140/" target="_blank"><i class="fa fa-facebook" ></i></a>
				<a href="https://twitter.com/divRKANACOWORKING" target="_blank"><i class="fa fa-twitter"></i></a>
			</div>
		</div>

	</section>

<section class="portfolio-section mt-5 pt-5 mb-5 mt-5">
	<div class="container">
		<div class="row">
	<?php 
	if( $_GET['tit'] == 'Inaguración' ){

	 ?>
	
			<div class="col-lg-6 col-md-12">
				<div class="portfolio-item">
					<img src="img/blog/Apertura/1.jpg" alt="">
				</div>
			</div>
				<div class="col-lg-6 col-md-6">
				<div class="portfolio-item">
					<img src="img/blog/Apertura/2.jpg" alt="">
				</div>
			</div>
			
			<div class="col-lg-6 col-md-12">
				<div class="portfolio-item">
					<img src="img/blog/Apertura/3.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="portfolio-item">
					<img src="img/blog/Apertura/5.jpg" alt="">
				</div>
				<div class="portfolio-item">
					<img src="img/blog/Apertura/6.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="portfolio-item">
					<img src="img/blog/Apertura/7.jpg" alt="">
				</div>
				<div class="portfolio-item">
					<img src="img/blog/Apertura/8.jpg" alt="">
				</div>
			</div>
	
<?php }elseif ($_GET['tit'] == 'ExpoCoworking') { ?>
		
			<div class="col-lg-4 col-md-12">
				<div class="portfolio-item">
					<img src="img/blog/expocoworking/4.jpg">
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="portfolio-item">
					<img src="img/blog/expocoworking/2.jpg">
				</div>
			</div>

			<div class="col-lg-4 col-md-12">
				<div class="portfolio-item">
					<img src="img/blog/expocoworking/3.jpg">
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="portfolio-item">
					<img src="img/blog/expocoworking/5.jpg">
				</div>
				<div class="portfolio-item">
					<img src="img/blog/expocoworking/6.jpg">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="portfolio-item">
					<img src="img/blog/expocoworking/7.jpg">
				</div>
				<div class="portfolio-item">
					<img src="img/blog/expocoworking/8.jpg">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="portfolio-item">
					<img src="img/blog/expocoworking/1.jpg">
				</div>
			</div>

	<?php }elseif ($_GET['tit'] == 'Llanogrande') { ?>
		
		
			<div class="col-lg-6 col-md-12">
				<div class="portfolio-item">
					<img src="img/sedes/llanogrande/2.jpg">
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="portfolio-item">
					<img src="img/sedes/llanogrande/3.jpg">
				</div>
			</div>
			
			<div class="col-lg-4 col-md-12">
				<div class="portfolio-item">
					<img src="img/sedes/llanogrande/4.jpg">
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="portfolio-item">
					<img src="img/sedes/llanogrande/5.jpg">
				</div>
			</div>

			<div class="col-lg-4 col-md-12">
				<div class="portfolio-item">
					<img src="img/sedes/llanogrande/1.jpg">
				</div>
			</div>

	<?php 
	}else{
	?>
	
	<div class="col-lg-12 col-md-12">
		<div class="portfolio-item">
			<video src="img/sedes/portanova/oficial.mp4" style="width:100%" autoplay muted loop></video>
			<h4>PORTANOVA</h4>
		</div>
	</div>
	<div class="col-lg-4 col-md-12">
		<div class="portfolio-item">
			<img src="img/sedes/portanova/3.jpg" alt="">
		</div>
	</div>
	<div class="col-lg-4 col-md-12">
		<div class="portfolio-item">
			<img src="img/sedes/portanova/1.jpg" alt="">
		</div>
	</div>	
	<div class="col-lg-4 col-md-12">
		<div class="portfolio-item">
			<img src="img/sedes/portanova/4.jpg" alt="">
		</div>
	</div>

<?php
	}
	 ?>
			
			
		</div>
	</div>
</section>
 