<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="relogio ponto web, ponto home office, ponto web, sistema de ponto web, gerenciamento de ponto online, app de ponto, app de registro de ponto, registrador de ponto online, registrar ponto pelo celular, aplicativo de ponto pelo celular, aplicativo de ponto,">
		<meta name="description" content="Gerencie em casa o pontos dos funcionários enquanto os mesmos registram seus pontos pelos seus celulares de casa ou de onde estiverem. Conheça o relógio de ponto web. Ótima solução para home office.">
		<title>Relógio Ponto WEB - Home Office</title>
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
							<h1>Relógio Ponto WEB<br>Home Office</h1>
							<p>Agora administrador, o seu funcionário pode bater o ponto de sua casa, utilizando o computador ou o celular. O que acha ? Fica ainda mais fácil você usando o nosso software web gerenciador para visualizar os pontos e acessar de onde estiver.</p>
							<a href="https://api.whatsapp.com/send?1=pt_BR&phone=5548984121662" class="appao-btn">Saiba mais</a>
							<a href="#video" class="appao-btn">Vídeo demonstrativo</a>
						</div>
					</div>
					<div class="col-lg-5">
					    <div class="hand-mockup text-lg-left text-center">
							<img src="../assets/img/sw.png" alt="relogio de ponto web" />
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
							<p>Como funciona a locação de softwares?<p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
					    <div class="single-about-box">
							<i class="icofont icofont-ruler-pencil"></i>
							<h4>Flexibilidade</h4>
							<p>Várias modalidades de planos pra você esolher qual se encaixa às suas necessidades.</p>
						</div>
					</div>
					<div class="col-lg-4">
					    <div class="single-about-box active">
							<i class="icofont icofont-computer"></i>
							<h4>Praticidade</h4>
							<p>Tenha tudo o que você precisa em um único software.</p>
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
							<a href="https://www.youtube.com/watch?v=tuU_hb0R94U" class="popup-youtube"><i class="icofont icofont-ui-play"></i></a>
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
							<h4>Relógio Ponto WEB Home Office</h4>
							<p>Finalmente chegou ao fim do SOFRIMENTO com o controle de ponto na sua empresa: Um software web de apuração de ponto completo, que armazena e monitora o desempenho da sua equipe.
							Operando de forma SEGURA, todos os dados são salvos em nuvem, para você não correr o risco de perder NENHUMA informação.
							Com esse software de ponto web sua empresa economiza tempo e dinheiro. E também fica livre das dores de cabeça causadas pelos ERROS na apuração de ponto.</p>
							<h5>Vantagens</h5>
							<p>A solução permite acessar e monitorar as marcações de ponto, histórico de presença, consultas, lançamentos e relatórios, processados de forma rápida e confiável, através de cálculos automáticos. Operando de forma segura, o sistema de ponto web pode ser administrado a partir de qualquer lugar, via internet, facilitando a interação do administrador com o sistema e proporcionando aumento na produtividade da empresa.</p>
							<h5>Finalidade Básica</h5>
							<p>Automatizar a função do apontamento de ponto, tornando os cálculos normais, noturnas, extras, faltas, etc, de fácil visualização e entendimento, de forma automática, proporcionando um trabalho mais ágil e confiável.
							Fornece automaticamente, ao final do período de apuração, relatórios com os totais individuais de cada funcionário.</p>
							<h5>Módulo Mobile</h5>
							<p>O aplicativo de registro de ponto para funcionários externos faz parte dos pacotes do software de registro de ponto web.
							Além de todas as funcionalidades que um sistema de ponto oferece, como horas trabalhadas, horas extras, faltas, banco de horas, etc., o software disponibiliza a hora e localização em que o funcionário estava no momento do registro do ponto, utilizando a tecnologia de Geolocalização podendo operar sem o uso de Internet (offline) recurso para o android.
							O Eaplicativo bloqueia falsa localização de GPS e é capaz de pegar os registros de alteração de horário do sistema operacional, ou seja, não é possível alterar a hora do registro de ponto, evitando qualquer tipo de fraudes.
							Este aplicativo funciona de forma integrada (e em tempo real) ao sistema web, onde é possível realizar toda a gestão das marcações registradas no aplicativo.</p>
							<a href="https://api.whatsapp.com/send?1=pt_BR&phone=5548984121662" class="appao-btn appao-btn2">Solicite Demonstração</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<img src="../assets/img/sf.png" alt="ponto online">
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
										<h4>Software WEB</h4>
										<p>Integração com software web para gerenciamento e tratativa de pontos.</p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-computer"></i>
									</div>
								</li>
								<li>
									<div class="feature-box-info">
										<h4>Relatório</h4>
										<p>O relógio de ponto web é um sistema de controle de ponto eletrônico completo, que armazena e monitora o desempenho da sua equipe.</p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-law-document"></i>
									</div>
								</li>
								<li>
									<div class="feature-box-info">
										<h4>Segurança</h4>
										<p>Todos os dados são salvos em nuvem, você não corre o risco de perder nenhuma informação.</p>
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
							<img src="../assets/img/sw2.png" alt="aplicativo de ponto web">
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
										<h4>Facilidade</h4>
										<p>Reduza o tempo no controle de ponto dos funcionários e ganhe mais tempo para o RH.</p>
									</div>
								</li>
								<li>
									<div class="feature-box-icon">
										<i class="icofont icofont-sun-alt"></i>
									</div>
									<div class="feature-box-info">
										<h4>Aplicativo</h4>
										<p>Software web com disponibilidade de registro de ponto por aplicativo</p>
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