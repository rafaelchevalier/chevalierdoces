<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
	<title>Chevalier Doces</title>
	<!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Brownies">
    <meta name="author" content="Chevalier Doces">
	<meta name="keywords" content="brownies, Chevalier Brownies, Doces, Doceria, Delicias, Delicatessen, Brownie, Brownie Vista Alegre">
	
	<!-- Favicon -->
    <link rel="shortcut icon" href="img/icone.ico">
	
	<!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
	
	<!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
	
    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
	
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css"><!-- Icones -->
    <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/hover-effects/css/custom-hover-effects.css">
	<link rel="stylesheet" href="assets/plugins/ladda-buttons/css/custom-lada-btn.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	
</head>
<body>
	<!-- Página Inicial -->
	<div class="bg_home">
			<div class="container heading heading-v6">
				<img  class="logo_home" src="assets/img/logo.png" alt="logo" width="260" />
				<ul class="nav navbar-nav menu_bg menu_texto">
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<!-- <li> &nbsp;<a href="#">SOBRE</a>&nbsp;</li> -->
					<li> &nbsp;<a href="{{ route('home') }}">HOME</a>&nbsp;</li>
					<li> &nbsp;<a href="{{ route('produto') }}">PRODUTO</a>&nbsp;</li>
					<li> &nbsp;<a href="{{ route('contato') }}">CONTATO</a>&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li> &nbsp;<a href="{{ route('representante') }}">REPRESENTANTES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li><a href="https://www.facebook.com/chevalierdoces/"><img src="assets/img/facebook.png" width="45px" alt="Facebook"></a></li>
					<li><a href="https://www.instagram.com/chevalierdoces/"><img src="assets/img/instagram.png" width="45px" alt="Instagram"></a></li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				</ul>					
			</div>
	</div>
	<!-- Conteúdo página-->
	@yield('content')
	
	
	<!-- Rodapé -->
	<div class="wrapper">
		<div class="wrapper ">
			<div class="row heading heading-v6">
				<p></p>
				<p>
					<a href="https://www.facebook.com/chevalierdoces"><img src="assets/img/facebook.png" width="50px" alt="Facebook"></a>
					<a href="#"><img src="assets/img/instagram.png" width="50px" alt="Instagram"></a>
				</p>
				<p>
					Rua Severianno Monteiro, 271 Casa 2, Bairro Bras de Pina - Rio de Janeiro RJ - Cep: 21.235-620 <br />
					Telefone: (21)4107-6244 - Email: <a href="mailto:contato@chevalierdoces" >contato@chevalierdoces.com.br
				</p>
				
			</div><!--/row heading heading-v6-->
		</div><!--/wrapper-->
	</div><!--/wrapper-->


	<!-- JS Global Compulsory -->
    <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
    <script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
    <script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
    <script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>
	<script type="text/javascript" src="assets/js/plugins/cube-portfolio/cube-portfolio-2-ns.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            OwlCarousel.initOwlCarousel();
            ParallaxSlider.initParallaxSlider();
        });
	</script>
	<!-- Inicio Script Bitrix24 -->
	<script>
		(function(w,d,u){
			var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
			var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
		})(window,document,'https://cdn.bitrix24.com.br/b11060467/crm/tag/call.tracker.js');
	</script>
	<!-- Fim Script Bitrix24 -->
</body>

</html>
