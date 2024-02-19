<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="central telefonica, aluguel de central telefonica, locação de central telefonica, central telefonica para alugar, central telefonica locação">
		<meta name="description" content="Aluguel de central telefônica. Central telefônica com aplicativo | Aluguequipo - Locação de equipamentos eletrônicos. Soluções para seu estabelecimento.">">
		<title>Central Telefônica - Locação</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/icofont.css" media="all" />
		<!-- Slick CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">

		<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/magnific-popup.css">
		<!-- Switcher CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/switcher-style.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/animate.min.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" media="all" />
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="../assets/img/icone.png" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<title>FormMail Demo</title>
		    <script type="text/javascript">
		    function hgsubmit() {
		    	alert ('E-mail enviado com sucesso!\nObrigado.');
		    }
		    </script>
		    <title>Mascara Telefone</title>
		    <script type="text/javascript">
		    	function mascara(telefone){
		    		if(telefone.value.length == 0)
		    			telefone.value = '(' + telefone.value;
		    			if(telefone.value.length == 3)
		    				telefone.value = telefone.value + ') ';
		    			if(telefone.value.length == 10)
		    				telefone.value = telefone.value + '-';
		    	}
		    </script>
		    <script type="text/javascript">
		    	function duplicarCampos(){
		    		var clone = document.getElementById('origem').cloneNode(true);
		    		var destino = document.getElementById('destino');
		    		destino.appendChild (clone);
		    		var camposClonados = clone.getElementsByTagName('input');
		    		for(i=0; i<camposClonados.length;i++){
		    			camposClonados[i].value = '';
		    		}
		    	}
		    	function removerCampos(id){
		    		var node1 = document.getElementById('destino');
		    		node1.removeChild(node1.childNodes[0]);
		    	}
		    </script>
		    <script type="text/javascript">
		    	function duplicarEmail(){
		    		var clone = document.getElementById('origemEmail').cloneNode(true);
		    		var destino = document.getElementById('destinoEmail');
		    		destino.appendChild (clone);
		    		var camposClonados = clone.getElementsByTagName('input');
		    		for(i=0; i<camposClonados.length;i++){
		    		camposClonados[i].value = '';
		    	}
		    }
		    </script>
		</head>
	<body data-spy="scroll" data-target=".header" data-offset="50">
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header section start -->
		<?php
			require ("header.php");
		?>
		<!-- header section end -->
		<!-- hero area start -->
		<section class="hero-area" id="home">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="hero-area-content">
							<h1>Central Telefônica</h1>
							<p>Compostas por centrais PABX de comunicação híbrida que integram as tecnologias analógica, digital e IP esse equipamento é ideal para micro e pequenas empresas que buscam melhorar a qualidade e a capacidade de comunicação.</p>
							<a href="#descricao" class="appao-btn">Saiba mais</a>
							<a href="#video" class="appao-btn">Vídeo demonstrativo</a>
						</div>
					</div>
					<div class="col-lg-5">
					    <div class="hand-mockup text-lg-left text-center">
							<img src="../assets/img/impacta16.png" alt="central telefonica" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- hero area end -->
		<!-- about section start -->
		<section class="about-area ptb-90">
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
		<!-- about section end -->
		<!-- video section start -->
		<section class="video-area ptb-90" id="video">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="video-popup">
							<a href="#" class="popup-youtube"><i class="icofont icofont-ui-play"></i></a>
							<h1>Vídeo Demonstrativo</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- video section end -->
		<!-- showcase section start -->
		<section class="showcase-area ptb-90" id="descricao">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="sec-title">
							<h2>Descrição<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
						</div>
					</div>
				</div>
				<div class="row flexbox-center">
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<h4>Centrais Telefônicas Impacta</h4>
							<p>A linha Impacta é composta por centrais PABX de comunicação híbrida que integram as tecnologias analógica, digital e IP. Ideais para micro e pequenas empresas que buscam melhorar a qualidade e a capacidade de comunicação, as centrais Impacta oferecem diversas funções sem muito investimento. Além de apresentarem as funções habituais de um PABX, elas podem interligar duas ou mais redes e permitir a realização de chamadas com tecnologia VoIP (voz sobre internet).</p>
							<a href="https://backend.intelbras.com/sites/default/files/2019-07/Datasheet_Impacta_16_Impacta_40_Impacta_68i_01-19_0.pdf" class="appao-btn appao-btn2">Ler datasheet</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<img src="../assets/img/central.png" alt="central telefonica com app">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- showcase section start -->
		<!-- feature section start -->
		<section class="feature-area ptb-90" id="feature">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-4">
						<div class="single-feature-box text-lg-right text-center">
							<ul>
								<li>
									<div class="feature-box-info">
										<h4>Qualidade</h4>
										<p>Possui várias funções e opções desenvolvidas para facilitar a comunicação entre empresas, seus clientes e filiais.</p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-computer"></i>
									</div>
								</li>
								<li>
									<div class="feature-box-info">
										<h4>Economia</h4>
										<p>Através de funções como seleção automática de linhas, ramal econômico e bloqueio de recebimento de chamadas a cobrar, é possível reduzir o valor da conta telefônica.</p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-law-document"></i>
									</div>
								</li>
								<li>
									<div class="feature-box-info">
										<h4>Garantia Permanente</h4>
										<p>Durante todo o período do contrato de locação.</p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-heart-beat"></i>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-feature-box text-center">
							<img src="../assets/img/impacta16.png" alt="central telefonica com aplicativo">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-feature-box text-lg-left text-center">
							<ul>
								<li>
									<div class="feature-box-icon">
										<i class="icofont icofont-eye"></i>
									</div>
									<div class="feature-box-info">
										<h4>Praticidade</h4>
										<p>A tecnologia VoIP permite a interligação entre matriz e filiais, para que elas possam se falar de forma simplificada e sem custos, tudo via internet.</p>
									</div>
								</li>
								<li>
									<div class="feature-box-icon">
										<i class="icofont icofont-sun-alt"></i>
									</div>
									<div class="feature-box-info">
										<h4>Agilidade</h4>
										<p>As centrais Impacta identificam quem está ligando e direcionam as chamadas para qualquer ramal, grupo ou filial que estiver pré-cadastrado para atender.</p>
									</div>
								</li>
								<li>
									<div class="feature-box-icon">
										<i class="icofont icofont-headphone-alt"></i>
									</div>
									<div class="feature-box-info">
										<h4>Suporte Técnico</h4>
										<p>Suporte técnico remoto via telefone, e-mail e chat.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- feature section end -->
		<!-- screenshots section start -->
		<section class="screenshots-area ptb-90" id="screenshot">
			<div class="container">
				<?php
					require ("../assets/carrossel.php")
				?>
			</div>
		</section>
		<!-- screenshots section end -->
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
		<script src="../assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="../assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="../assets/js/jquery.slicknav.min.js"></script>
		<!-- Slick JS -->
		<script src="../assets/js/slick.min.js"></script>
		<!-- owl carousel JS -->
		<script src="../assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="../assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter JS -->
		<script src="../assets/js/jquery.counterup.min.js"></script>
		<!-- Counterup waypoints JS -->
		<script src="../assets/js/waypoints.min.js"></script>
	    <!-- YTPlayer JS -->
	    <script src="../assets/js/jquery.mb.YTPlayer.min.js"></script>
		<!-- jQuery Easing JS -->
		<script src="../assets/js/jquery.easing.1.3.js"></script>
		<!-- Gmap JS -->
		<script src="../assets/js/gmap3.min.js"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
		<!-- Custom map JS -->
		<script src="../assets/js/custom-map.js"></script>
		<!-- WOW JS -->
		<script src="../assets/js/wow-1.3.0.min.js"></script>
		<!-- Switcher JS -->
		<script src="../assets/js/switcher.js"></script>
		<!-- main JS -->
		<script src="../assets/js/main.js"></script>
	</body>
</html>