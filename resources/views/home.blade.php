@extends('layouts.site')


@section('content')
<!-- Sobre a Empresa 
	<div class="wrapper bg_claro">
		<div class="container bg_claro">
			<div class="row padding-top">
				<div class="col col-md-8">
					<p class="heading heading-v1"><h2></p></h2>
					<p class="texto-branco"><h2>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</h2></p>
				</div>
				<div class="col col-md-4">
					<img src="assets/img/Talheres.png" width="80%" alt="Talheres" />
				</div>
			</div>
		</div>
	</div>
	-->
	<!-- Produtos -->
	<div id="produto" class="wrapper">
		<div class="wrapper bg_escuro">
			<div class="container bg_escuro">
				<div class="row padding-top">
					<div class="col col-md-4">
						<!-- <p class="heading heading-v1"><h2>Chevalier Doces</p></h2>-->
						<p><h2><img class="rounded-x borda-verde-clara"  src="assets/img/brownies2.jpg" width="250px" height="250px" alt="Brownies"></h2></p>
					</div><!-- col col-md-8 -->
					<div class="col col-md-4">
						<ul >
							<h3 class="texto-branco">SABORES</h3>
							<li class="texto-branco">Chocolate C/Avelã</li>
							<li class="texto-branco">Brigadeiro</li>
							<li class="texto-branco">Doce de Leite</li>
							<li class="texto-branco">Beijinho</li>
							<li class="texto-branco">Tradicional</li>
						</ul>
					</div><!-- col col-md-4 -->
					<div class="col col-md-4">
						<!-- <p class="heading heading-v1"><h2>Chevalier Doces</p></h2>-->
						<img src="assets/img/Talheres.png" width="40%" alt="Talheres" />
					</div><!-- col col-md48 -->
				</div><!-- /row padding-top -->
			</div><!--/container-->
		</div><!--/wrapper-->
	</div><!--/wrapper-->
	<!-- Contato -->
	<div class="wrapper">
		<div class="bg_contato">
			<!--=== Conteúdo 3 (Contato) ===-->
		<div class="container">
			<!--****** Formulário de contato *******-->
			<br /><br />
			<div class="row heading heading-v6">
				<h1 id="contato"><STRONG><span class="borda-bot-verde-clara">&nbsp;&nbsp;&nbsp;ENTRE EM CONTATO FAÇA PEDIDOS, TIRE DÚVIDAS E SUGESTÕES&nbsp;&nbsp;&nbsp;</span></STRONG></h1>
			</div>
			<br /><br />	
			<form action="assets\php\email\email.php" method="post" id="sky-form" class="sky-form">
				<div class="row">
					<section class="col col-6">
						<label class="input">
							<i class="icon-prepend fa fa-user"></i>
							<input type="text" name="nome" placeholder="Nome">
						</label>
					</section>
					<section class="col col-6">
						<label class="input">
							<i class="icon-prepend fa fa-envelope"></i>
							<input type="text" name="email" placeholder="E-mail">
						</label>
					</section>
				</div>
				<div class="row">
					<section class="col col-6">
						<label class="input">
							<i class="icon-prepend fa fa-phone"></i>
							<input type="text" name="telefone" placeholder="Telefone">
						</label>
					</section>
					<section class="col col-6">
						<label class="select">
							<select name="motivo_contato">
								<option value="0" selected disabled>Motivo Contato</option>
								<option value="pedido">Pedido</option>
								<option value="duvida">Dúvida</option>
								<option value="sugestao">Sugestão</option>
							</select>
							<i></i>
						</label>
					</section>	
				</div>
				<div class="row">
					<section>
						<label class="label">Mensagem</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea rows="4" name="message" id="message"></textarea>
						</label>
					</section>
				</div>
				<div class="row">
					<button type="submit" class="btn-u">Enviar</button>
				</div>
			</form>
			<br />
				<div class="row heading heading-v6">
					<img src="assets/img/logo.png" width="300px" alt="Logo">
				</div>
			<br />
			<!--****** Fim Formulário de contato *******-->
		</div>
		</div><!--/bg_contato-->
	</div><!--/wrapper-->
@endsection
