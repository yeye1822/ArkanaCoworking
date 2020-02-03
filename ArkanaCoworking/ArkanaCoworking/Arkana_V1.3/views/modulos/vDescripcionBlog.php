<?php 
      if( $_GET['tit'] == 'Inaguración' ){
?>

<section class="page-top-section set-bg" data-setbg="img/inaguracion/header1.jpg">

<?php }elseif ($_GET['tit'] == 'ExpoCoworking') { ?>
	

<section class="page-top-section set-bg" data-setbg="img/inaguracion/headerExpo.jpg">


<?php }else{ ?>

<section class="page-top-section set-bg" data-setbg="img/inaguracion/sedes.jpg">

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
					<img src="img/inaguracion/1.jpg" alt="">
				</div>
			</div>
				<div class="col-lg-6 col-md-6">
				<div class="portfolio-item">
					<img src="img/inaguracion/2.jpg" alt="">
				</div>
			</div>
			
			<div class="col-lg-6 col-md-12">
				<div class="portfolio-item">
					<img src="img/inaguracion/3.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="portfolio-item">
					<img src="img/inaguracion/5.jpg" alt="">
				</div>
				<div class="portfolio-item">
					<img src="img/inaguracion/6.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="portfolio-item">
					<img src="img/inaguracion/7.jpg" alt="">
				</div>
				<div class="portfolio-item">
					<img src="img/inaguracion/8.jpg" alt="">
				</div>
			</div>
	
<?php }elseif ($_GET['tit'] == 'ExpoCoworking') { ?>
		
			<div class="col-lg-4 col-md-12">
				<div class="portfolio-item">
					<img src="img/expo/4.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="portfolio-item">
					<img src="img/expo/2.jpg" alt="">
				</div>
			</div>

			<div class="col-lg-4 col-md-12">
				<div class="portfolio-item">
					<img src="img/expo/3.jpg" alt="">
				</div>
			</div>



			<div class="col-lg-3 col-sm-6">
				<div class="portfolio-item">
					<img src="img/expo/5.jpg" alt="">
				</div>
				<div class="portfolio-item">
					<img src="img/expo/6.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="portfolio-item">
					<img src="img/expo/7.jpg" alt="">
				</div>
				<div class="portfolio-item">
					<img src="img/expo/8.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="portfolio-item">
					<img src="img/expo/1.jpg" alt="">
				</div>
			</div>

	<?php 
	}else{
	?>
	<div class="col-lg-4 col-md-12">
		<div class="portfolio-item">
			<img src="img/llanoGrande/1.jpg" alt="">
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="portfolio-item">
			<img src="img/llanoGrande/2.jpg" alt="">
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="portfolio-item">
			<img src="img/llanoGrande/3.jpg" alt="">
		</div>
	</div>
	
	<div class="col-lg-12 col-md-12">
		<div class="portfolio-item">
			<video src="img/portaNova/video/oficial.mp4" style="width:100%" autoplay muted loop></video>
			<h4>PORTANOVA</h4>
		</div>
	</div>
	<div class="col-lg-4 col-md-12">
		<div class="portfolio-item">
			<img src="img/portaNova/3.jpg" alt="">
		</div>
	</div>
	<div class="col-lg-4 col-md-12">
		<div class="portfolio-item">
			<img src="img/portaNova/1.jpg" alt="">
		</div>
	</div>	
	<div class="col-lg-4 col-md-12">
		<div class="portfolio-item">
			<img src="img/portaNova/4.jpg" alt="">
		</div>
	</div>

<?php
	}
	 ?>
			
			
		</div>
	</div>
</section>
 