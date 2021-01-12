<html>
    <head>
        <meta name="charset" content="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title>Página Inicial</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/localstorage.js"></script>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		
		<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
	
	
    </head>
    <body>
	    <h4 align="right">Carrinho<img src="media/icones/carrinho.svg" width="3.5%"></h4>
        <center><h1>Carrinho<h1></center>
		<!-- Catálogos  -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Produtos</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="tab-content" id="myTabContent">
							<!--/ Listagem dos produtos no carrinho -->
							<?php
								$produto = "<script>localStorage.getItem('nome')</script>" 
								?>
							
						
						
									</div>
								</div>
								<!--/ Fim da listagem dos produtos no carrinho -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
    </body>
</html>