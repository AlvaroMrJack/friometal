<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Demo Shop 17 | Porto - Responsive HTML5 Template 5.7.2</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=base_url('resources/img/favicon.ico')?>" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?=base_url('resources/img/apple-touch-icon.png')?>">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url('resources/vendor/bootstrap/css/bootstrap.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/vendor/font-awesome/css/font-awesome.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/vendor/animate/animate.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/vendor/simple-line-icons/css/simple-line-icons.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/vendor/owl.carousel/assets/owl.carousel.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/vendor/owl.carousel/assets/owl.theme.default.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/vendor/magnific-popup/magnific-popup.min.css')?>">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url('resources/css/theme.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/css/theme-elements.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/css/theme-blog.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/css/theme-shop.css')?>">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?=base_url('resources/vendor/rs-plugin/css/settings.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/vendor/rs-plugin/css/layers.css')?>">
		<link rel="stylesheet" href="<?=base_url('resources/vendor/rs-plugin/css/navigation.css')?>">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url('resources/css/skins/skin-shop-17.css')?>"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?=base_url('resources/css/demos/demo-shop-17.css')?>">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url('resources/css/custom.css')?>">

		<!-- Head Libs -->
		<script src="<?=base_url('resources/vendor/modernizr/modernizr.min.js')?>"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 142, 'stickySetTop': '-36px', 'stickyChangeLogo': false}"  class="">
				<div class="header-body">
					<div class="header-top">
						<div class="container">
							<div class="header-search">
								<a href="#" class="search-toggle"><i class="fa fa-search"></i> <span>Buscar</span></a>
								<form action="#" method="get">
									<div class="header-search-wrapper">
										<input type="text" class="form-control" name="q" id="q" placeholder="Buscar..." required>
										<select id="cat" name="cat">
											<option value="">Todas las categorías</option>
											<option value="4">Fashion</option>
											<option value="12">Women</option>
                                        </select>
										<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</div>

							<div class="cart-dropdown">
								<a href="#" class="cart-dropdown-icon">
									<i class="minicart-icon"></i>
									<span class="cart-info">
										<span class="cart-qty">2</span>
										<span class="cart-text">item(s)</span>
									</span>
								</a>

								<div class="cart-dropdownmenu right">
									<div class="dropdownmenu-wrapper">
										<div class="cart-products">
											<div class="product product-sm">
												<a href="#" class="btn-remove" title="Remove Product">
													<i class="fa fa-times"></i>
												</a>
												<figure class="product-image-area">
													<a href="demo-shop-17-product-details.html" title="Product Name" class="product-image">
														<img src="../img/demos/shop/products/thumbs/cart-product1.jpg" alt="Product Name">
													</a>
												</figure>
												<div class="product-details-area">
													<h2 class="product-name"><a href="demo-shop-17-product-details.html" title="Product Name">Blue Women Top</a></h2>

													<div class="cart-qty-price">
														1 X 
														<span class="product-price">$65.00</span>
													</div>
												</div>
											</div>
											<div class="product product-sm">
												<a href="#" class="btn-remove" title="Remove Product">
													<i class="fa fa-times"></i>
												</a>
												<figure class="product-image-area">
													<a href="demo-shop-17-product-details.html" title="Product Name" class="product-image">
														<img src="../img/demos/shop/products/thumbs/cart-product2.jpg" alt="Product Name">
													</a>
												</figure>
												<div class="product-details-area">
													<h2 class="product-name"><a href="demo-shop-17-product-details.html" title="Product Name">Black Utility Top</a></h2>

													<div class="cart-qty-price">
														1 X 
														<span class="product-price">$39.00</span>
													</div>
												</div>
											</div>
										</div>

										<div class="cart-totals">
											Total: <span>$104.00</span>
										</div>

										<div class="cart-actions">
											<a href="#" class="btn btn-primary">View Cart</a>
											<a href="#" class="btn btn-primary">Checkout</a>
										</div>
									</div>
								</div>
							</div>		
							
							<p class="welcome-msg">Contáctenos al: <i class="fa fa-phone"></i> (+562) 9876 5432</p>

							<a href="#" class="mmenu-toggle-btn" title="Toggle menu">
								<i class="fa fa-bars"></i>
							</a>

						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="<?=base_url()?>">
										<img alt="Friometal" width="111" height="51" src="<?=base_url('resources/img/demos/shop/logo-shop-black.png')?>">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="row">
									<div class="header-nav-main header-nav-right">
										<nav>
											<ul class="nav nav-pills" id="sideNav">
												<li class="pull-right">
													<a href="<?=site_url('Contacto_Controller/index')?>">
														Contacto
													</a>
												</li>
												<li class="pull-right">
													<a href="<?=site_url('Nosotros_Controller/index')?>">
														Sobre nosotros
													</a>
												</li>
												<li class="pull-right">
													<a href="<?=base_url()?>">
														Inicio
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="mobile-nav">
				<div class="mobile-nav-wrapper">
					<ul class="mobile-side-menu">
						<li><a href="<?=base_url()?>">Inicio</a></li>
						<li><a href="<?=site_url('Nosotros_Controller/index')?>">Sobre nosotros</a></li>
						<li><a href="<?=site_url('Contacto_Controller/index')?>">Contacto</a></li>
					</ul>
				</div>
			</div>
			
			<div id="mobile-menu-overlay"></div>

			<div role="main" class="main">
				<div class="cart">
					<div class="container">
						<h1 class="h2 heading-primary mt-lg clearfix">
							<span>Carro de cotización</span>
						</h1>

						<div class="row">
							<div class="col-md-8 col-lg-9">
								<div class="cart-table-wrap">
									<table class="cart-table">
										<thead>
											<tr>
												<th></th>
												<th></th>
												<th>Nombre del producto</th>
												<th>Precio unitario</th>
												<th>Cantidad</th>
												<th>Subtotal</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="product-action-td">
													<a href="#" title="Remove product" class="btn-remove"><i class="fa fa-times"></i></a>
												</td>
												<td class="product-image-td">
													<a href="#" title="Product Name">
														<img src="<?=base_url('resources/img/demos/shop/products/cart-product1.jpg')?>" alt="Product Name">
													</a>
												</td>
												<td class="product-name-td">
													<h2 class="product-name"><a href="#" title="Product Name">Women Fashion Blouse</a></h2>
												</td>
												<td>$120.00</td>
												<td>
													<div class="qty-holder">
														<a href="#" class="qty-dec-btn" title="Dec">-</a>
														<input type="text" class="qty-input" value="1">
														<a href="#" class="qty-inc-btn" title="Inc">+</a>
														<a href="#" class="edit-qty"><i class="fa fa-pencil"></i></a>
													</div>
												</td>
												<td>
													<span class="text-primary">$120.00</span>
												</td>
											</tr>
											<tr>
												<td class="product-action-td">
													<a href="#" title="Remove product" class="btn-remove"><i class="fa fa-times"></i></a>
												</td>
												<td class="product-image-td">
													<a href="#" title="Product Name">
														<img src="<?=base_url('resources/img/demos/shop/products/cart-product2.jpg')?>" alt="Product Name">
													</a>
												</td>
												<td class="product-name-td">
													<h2 class="product-name"><a href="#" title="Product Name">Black Utility Top</a></h2>
												</td>
												<td>$49.00</td>
												<td>
													<div class="qty-holder">
														<a href="#" class="qty-dec-btn" title="Dec">-</a>
														<input type="text" class="qty-input" value="1">
														<a href="#" class="qty-inc-btn" title="Inc">+</a>
														<a href="#" class="edit-qty"><i class="fa fa-pencil"></i></a>
													</div>
												</td>
												<td>
													<span class="text-primary">$49.00</span>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="6" class="clearfix">
													<button class="btn btn-default hover-primary btn-continue">Continuar viendo maquinarias</button>
													<button class="btn btn-default hover-primary btn-clear">Vaciar carro de cotización</button>
												</td>
											</tr> 
										</tfoot>	
									</table>
								</div>
							</div>
							<aside class="col-md-4 col-lg-3 sidebar shop-sidebar">
								<div class="panel-group">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" href="#panel-cart-total">
													Cotización final
												</a>
											</h4>
										</div>
										<div id="panel-cart-total" class="accordion-body collapse in">
											<div class="panel-body">
												<table class="totals-table">
													<tbody>
														<tr>
															<td>Subtotal</td>
															<td>$159.00</td>
														</tr>
														<tr>
															<td>Total</td>
															<td>$159.00</td>
														</tr>
													</tbody>
												</table>
												<div class="totals-table-action">
													<a href="#" class="btn btn-primary btn-block">Enviar Cotización</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>

			</div>

			<footer id="footer">
				<div class="footer-copyright">
					<div class="container">
						<a href="index.html" class="logo">
							<img alt="Porto Website Template" class="img-responsive" src="<?=base_url('resources/img/demos/shop/logo-footer-black.png')?>">
						</a>
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p class="copyright-text">© Copyright 2018. Todos los derechos reservados.</p>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?=base_url('resources/vendor/jquery/jquery.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/jquery.appear/jquery.appear.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/jquery.easing/jquery.easing.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/jquery-cookie/jquery-cookie.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/common/common.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/jquery.validation/jquery.validation.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/jquery.gmap/jquery.gmap.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/jquery.lazyload/jquery.lazyload.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/isotope/jquery.isotope.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/owl.carousel/owl.carousel.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/magnific-popup/jquery.magnific-popup.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/vide/vide.min.js')?>"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?=base_url('resources/js/theme.js')?>"></script>



		<!-- Current Page Vendor and Views -->
		<script src="<?=base_url('resources/js/views/view.contact.js')?>"></script>



		<!-- Demo -->
		<script src="<?=base_url('resources/js/demos/demo-shop-17.js')?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?=base_url('resources/js/custom.js')?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?=base_url('resources/js/theme.init.js')?>"></script>






		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>
