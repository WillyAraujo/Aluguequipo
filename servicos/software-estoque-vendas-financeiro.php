<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="aluguel de software, software para locação, software para controle financeiro, software para pedido de vendas, software para controle financeiro, sistema para vendas, sistema para financeiro, sistema para estoque">
		<meta name="description" content="Quer controlar seu estoque, organizar seus pedidos de vendas e controlar o financeiro, tudo em um só software? Temos exatamente o que você precisa!">
		<title>Software para estoque, vendas e financeiro</title>
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
							<h1>Software para estoque, vendas e financeiro</h1>
							<p>Quer controlar seu estoque, organizar seus pedidos de vendas e controlar o financeiro, tudo em um só software? Temos exatamente o que você precisa!</p>
							<a href="#descricao" class="appao-btn">Saiba mais</a>
							<a href="#video" class="appao-btn">Vídeo demonstrativo</a>
						</div>
					</div>
					<div class="col-lg-5">
					    <div class="hand-mockup text-lg-left text-center">
					    	<div class="software">
								<img src="../assets/img/sevf.png" alt="software vendas financeiro" />
							</div>
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
							<p>Várias modalidades de planos pra você escolher qual se encaixa às suas necessidades.</p>
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
							<h4>Software para estoque, vendas e financeiro</h4>
							<p>
								<h4>Principais vantagens:</h4><br>

								- Não tem Limite de Cadastro<br>
								- Funciona no Windows XP/VISTA/WIN7/WIN8/WIN10 com 32 e 64 Bits.<br>
								- Não precisa de internet<br>
								- Roda direto no Pen Drive ou HD externo<br>
								- Roda em Rede para até 8 micros<br>
								- Planos nas modalidades mensal (bronze), semestral(prata) e anual(ouro)<br>
								- Suporte e Atendimento OnLine via site ou menu ajuda do programa<br>
								- Backup da pasta inteira do programa ( sem burocracia )<br>								
								- Você mesmo personalizar o fundo de tela do programa<br>
								- Você mesmo configura a logomarca no programa<br>
								- Campo Padrão na tela de vendas editável, personalizado<br>
								- Pode formatar o computador e reinstalar o programa sem restrição de chave<br><br>
						
								<h4>Programa direcionado para as seguintes áreas:</h4><br>
								- Lojas comerciais<br>
								- Auto peças<br>
								- Ferragens<br>
								- Madeireiras<br>
								- Confecções<br>
								- Representações<br>
								- Cosméticos<br>
								- Vendedores em geral<br><br>

								<h4>Principais Telas:</h4><br>
								Tela Cadastro Cliente<br>
								Tela Cadastro Fornecedor<br>
								Tela Cadastro de Vendedor<br>
								Tela Cadastro & Pesquisa de Produtos & Estoque<br>
								Tela Reposiçao do Estoque<br>
								Tela de Vendas<br>
								Tela pra Configurar parametros de Venda<br>
								Tela pra Pesquisar Contas a Receber<br>
								Tela pra Pesquisar Contas a Pagar<br>
								Tela pra Gerenciar Movimento de Caixa<br>
							</p>
							<a href="#" class="appao-btn appao-btn2">Baixar demonstração</a>
						</div>
					</div><br><br>
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<div class="software">
								<img src="../assets/img/sevf2.png" alt="sistema controle estoque">
							</div>
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
										<h4>Organização</h4>
										<p>Tudo o que você precisa em apenas um software.</p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-computer"></i>
									</div>
								</li>
								<li>
									<div class="feature-box-info">
										<h4>Controle</h4>
										<p>Tenha controle de vendas, estoque e financeiro num só lugar.</p>
									</div>
									<div class="feature-box-icon">
										<i class="icofont icofont-law-document"></i>
									</div>
								</li>
								<li>
									<div class="feature-box-info">
										<h4>Tranquilidade</h4>
										<p>O software cuida de tudo pra você.</p>
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
							<div class="software2">
								<img src="../assets/img/sevf3.png" alt="programa vendas e financeiro">
							</div>
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
										<h4>Agilidade</h4>
										<p>Acesse rapidamente todas as informações de cadastro dos seus clientes.</p>
									</div>
								</li>
								<li>
									<div class="feature-box-icon">
										<i class="icofont icofont-sun-alt"></i>
									</div>
									<div class="feature-box-info">
										<h4>Personalização</h4>
										<p>Personalize o programa de acordo com o estilo da sua empresa.</p>
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