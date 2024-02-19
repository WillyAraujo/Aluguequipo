<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="locação de relogio de ponto, locação de relogio ponto biometrico, locação de relogio ponto cartografico, locação de catraca eletronica, locação de antena antifurto, locação de central telefonica, locação de central de alarme, locação de central de alarme com aplicativo, locação de central telefonica com aplicativo, locação de cftv, locação de cftv com aplicativo, locação de circuito fechado de tv com app, locação de cancela eletronica, locação de cancela de estacionamento, locação de controle de acesso, locação de controlador de acesso">
		<meta name="description" content="Aluguel de equipamentos eletrônicos para empresas: relógio ponto, catraca, antenas antifurto, central telefônica, central de alarme, centrolador de acesso, kit cftv e muito mais" >
		<title>Aluguequipo - Locação de equipamentos eletrônicos</title>
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="assets/img/icone.png" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158227742-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-158227742-1');
		</script>
		
		
		<script>
			const sharp = require('sharp');
			const fs = require('fs');
			const directory = 'assets/img';

			fs.readdirSync(directory).forEach(file => {
			  sharp(`${directory}/${file}`)
			    .resize(200, 100) // width, height
			    .toFile(`${directory}/${file}-small.jpg`);
			  });
		</script>
	</head>
	<body data-spy="scroll" data-target=".header" data-offset="50">
		<?php
			require ("header.php");
		?>
		<!-- header section end -->
		<!-- hero area start -->
		<section class="hero-area" id="home">
			<div class="hero-area-slider">
				<?php
					require ("assets/slider.php");
				?>
			</div>
		</section>
		<!-- hero area end -->
		<section class="about-area ptb-90" id="feature">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="sec-title">
							<h2>Locação<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
							<p>Como funciona a locação de equipamentos?<p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
					    <div class="single-about-box">
							<i class="icofont icofont-ruler-pencil"></i>
							<h4>Economia</h4>
							<p>Eliminação dos custos de aquisição, manutenção, armazenagem, transporte e reposição de equipamentos.</p>
						</div>
					</div>
					<div class="col-lg-4">
					    <div class="single-about-box active">
							<i class="icofont icofont-computer"></i>
							<h4>Garantia</h4>
							<p>Alugando um equipamento, você terá garantia permanente enquanto durar o contrato de locação.</p>
						</div>
					</div>
					<div class="col-lg-4">
					    <div class="single-about-box">
							<i class="icofont icofont-headphone-alt"></i>
							<h4>Suporte Gratuito</h4>
							<p>Suporte remoto via telefone, e-mail ou chat. Uma equipe especializada para te auxiliar.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- video section start -->
		<section class="video-area ptb-90">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="video-popup">
							<a href="https://www.youtube.com/watch?v=Pt_UpoHOxUg" class="popup-youtube"><i class="icofont icofont-ui-play"></i></a>
							<h1>Vídeo Demonstrativo</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- video section end -->
		<!-- google map area start -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.2018695152638!2d-48.5246432849405!3d-27.587270382841798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6aa2ba32c04696a!2sAluguequipo!5e0!3m2!1spt-BR!2sbr!4v1582812470339!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		<!-- google map area end -->
		<!-- footer section start -->
		<?php
			require ("footer.php")
		?>
		<!-- footer section end -->
		<a href="#" class="scrollToTop">
			<i class="icofont icofont-arrow-up"></i>
		</a>
		<!-- jquery main JS -->
		<!-- Slick CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">

		<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<script src="assets/js/jquery.min.js"></script>
		<!-- Slick nav JS -->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Slick JS -->
		<script src="assets/js/slick.min.js"></script>
		<!-- owl carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter JS -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- Counterup waypoints JS -->
		<script src="assets/js/waypoints.min.js"></script>
	    <!-- YTPlayer JS -->
	    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
		<!-- jQuery Easing JS -->
		<script src="assets/js/jquery.easing.1.3.js"></script>
		<!-- Gmap JS -->
		<script src="assets/js/gmap3.min.js"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
		<!-- Custom map JS -->
		<script src="assets/js/custom-map.js"></script>
		<!-- WOW JS -->
		<script src="assets/js/wow-1.3.0.min.js"></script>
		<!-- Switcher JS -->
		<script src="assets/js/switcher.js"></script>
		<!-- main JS -->
		<script src="assets/js/main.js"></script>
	</body>
</html>