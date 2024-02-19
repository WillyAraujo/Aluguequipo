<!-- footer section start -->
<footer class="footer" id="contact">
	<div class="container">
		<div class="row">
            <div class="col-lg-6">
				<div class="contact-form">
					<h4>Fale conosco</h4>
					<p class="form-message"></p>
					<form action="https://formmail.kinghost.net/formmail.cgi" method="POST">
                    <input type="hidden" name="recipient" value="contato@aluguequipo.com.br"> <!-- Pode ser qualquer endereço de email -->
                    <input type="hidden" name="redirect" value="https://aluguequipo.com.br/"> <!-- Após o envio, o usuário será redirecionado para a página configurada aqui -->
                    <input type="hidden" name="subject" value="Cliente em Potencial">  <!-- Assunto da mensagem -->
                    <input type="hidden" name="email" value="naoresponda@aluguequipo.com.br">   <!-- Deve ser uma conta de email ativa em seu domínio -->
                    <input type="text" name="Empresa:" placeholder="Digite sua empresa">
                    <input type="text" name="Nome:" placeholder="Digite seu nome" required>
                    <div id="origem" align="center">
                        <input type="text" name="Telefone/Whatsapp" id="telefone" placeholder="Telefone/Whatsapp" size="20" maxlength="15" onkeypress="mascara(this)" required>
                        <button class="mais" onclick="duplicarCampos();">+</button>
                        <!--<button onclick="removerCampos(this);">-</button>-->
                    </div>
                    <div id="destino">
                    </div>
                    <div id="origemEmail">
                        <input type="text" name="E-mail" placeholder="Digite seu e-mail" required>
                        <button class="mais" onclick="duplicarEmail();">+</button>
                    </div>
                    <div id="destinoEmail">
                    </div>
                    <textarea name="Mensagem" id="message" placeholder="Escreve uma mensagem"></textarea>
                    <div class="g-recaptcha" data-sitekey="6LchfCYeAAAAADA9VyVPDea_GX_TP2wnrzbe2UsK"></div>
                    <button id="send" value="Enviar" onclick="hgsubmit();">Enviar</button>
                </form>
				</div>
            </div>
            <div class="col-lg-6">
				<div class="contact-address">
					<h4>Endereço</h4>
					<p>Rua Juvencio Costa, nº 129, Sala 302, Bairro Trindade. Florianópolis - SC</p>
					<ul>
						<li>
							<div class="contact-address-icon">
								<i class="icofont icofont-headphone-alt"></i>
							</div>
							<div class="contact-address-info">
								<a href="callto:#">(47) 99952-6056</a>
								<a href="callto:#">(48) 3209-6056</a>
							</div>
						</li>
						<li>
							<div class="contact-address-icon">
								<i class="icofont icofont-envelope"></i>
							</div>
							<div class="contact-address-info">
								<a href="mailto:#">contato@aluguequipo.com.br</a>
							</div>
						</li>
						<li>
							<div class="contact-address-icon">
								<i class="icofont icofont-web"></i>
							</div>
							<div class="contact-address-info">
								<a href="https://aluguequipo.com.br/">www.aluguequipo.com.br</a>
							</div>
						</li>
					</ul>
				</div>
            </div>
		</div>
		<div class="row">
            <div class="col-lg-12">
				<div class="copyright-area">
					<a href="https://aluguequipo.com.br/">
						<img src="../assets/img/logo.png" width="300px" height="150px" id="footerLogo"><br>
					</a>
					<ul>
						<li><a href="https://www.facebook.com/Aluguequipo-101781031389809/?view_public_for=101781031389809"><i class="icofont icofont-social-facebook" target="blank"></i></a></li>
						<li><a href="https://twitter.com/aluguequipo" target="blank"><i class="icofont icofont-social-twitter"></i></a></li>
					</ul>
				</div>
            </div>
		</div>
	</div>
</footer>
<!-- footer section end -->