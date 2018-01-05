<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Friometal</title>	

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
														<img src="<?=base_url('resources/img/demos/shop/products/thumbs/cart-product1.jpg')?>" alt="Product Name">
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
														<img src="<?=base_url('resources/img/demos/shop/products/thumbs/cart-product2.jpg')?>" alt="Product Name">
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
			
			<div class="fullwidth-banner" style="background-image: url(<?=base_url('resources/img/categorias/banner/conservadoras.jpg')?>)">
				<div>
					<h2>Fabricadoras de Hielo</h2>
					<!-- <p>Set banners and description for any category of your website.</p> -->
				</div>
			</div>
				
			


			<section class="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="demo-shop-17.html">Inicio</a></li>
						<li class="active">Categoría 1</li>
					</ul>
				</div>
			</section>

			<div class="container">
				<div class="toolbar mb-none">
					<div class="sorter">
						<div class="sort-by">
							<label>Ordenar por:</label>
							<select>
								<option value="Name">Nombre</option>
								<option value="Price">Precio</option>
							</select>
							<a href="#" title="Set Desc Direction">
								<img src="<?=base_url('resources/img/demos/shop/i_asc_arrow.gif')?>" alt="Set Desc Direction">
							</a>
						</div>

						<div class="view-mode">
							<span title="Grid">
								<i class="fa fa-th"></i>
							</span>
							<a href="#" title="List">
								<i class="fa fa-list-ul"></i>
							</a>
						</div>
					</div>
				</div>

				<ul class="products-grid columns4">
					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="<?=site_url('Producto_Controller/index')?>" title="Product Name" class="product-image">
									<img src="<?=base_url('resources/img/demos/shop/products/product1.jpg')?>" alt="Product Name">
									<img src="<?=base_url('resources/img/demos/shop/products/product1-2.jpg')?>" alt="Product Name" class="product-hover-image">
								</a>
								<div class="product-label"><span class="discount">-10%</span></div>
								<div class="product-label"><span class="new">New</span></div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="<?=site_url('Producto_Controller/index')?>" title="Product Name">Noa Sheer Blouse</a></h2>

								<div class="product-price-box">
									<span class="old-price">$99.00</span>
									<span class="product-price">$89.00</span>
								</div>

								<div class="product-actions">
									<a href="#" class="addtocart" title="Agregar al carro">
										<i class="fa fa-shopping-cart"></i>
										<span>Agregar al carro</span>
									</a>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="detalle.html" title="Product Name" class="product-image">
									<img src="<?=base_url('resources/img/demos/shop/products/product2.jpg')?>" alt="Product Name">
									<img src="<?=base_url('resources/img/demos/shop/products/product2-2.jpg')?>" alt="Product Name" class="product-hover-image">
								</a>
								<div class="product-label"><span class="discount">-25%</span></div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="detalle.html" title="Product Name">Women Fashion Blouse</a></h2>

								<div class="product-price-box">
									<span class="old-price">$120.00</span>
									<span class="product-price">$90.00</span>
								</div>

								<div class="product-actions">
									<a href="#" class="addtocart" title="Agregar al carro">
										<i class="fa fa-shopping-cart"></i>
										<span>Agregar al carro</span>
									</a>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="detalle.html" title="Product Name" class="product-image">
									<img src="<?=base_url('resources/img/demos/shop/products/product3.jpg')?>" alt="Product Name">
								</a>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="detalle.html" title="Product Name">Fashion Dress</a></h2>

								<div class="product-price-box">
									<span class="product-price">$70.00</span>
								</div>

								<div class="product-actions">
									<a href="#" class="addtocart" title="Agregar al carro">
										<i class="fa fa-shopping-cart"></i>
										<span>Agregar al carro</span>
									</a>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="detalle.html" title="Product Name" class="product-image">
									<img src="<?=base_url('resources/img/demos/shop/products/product3.jpg')?>" alt="Product Name">
								</a>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="detalle.html" title="Product Name">Fashion Dress</a></h2>

								<div class="product-price-box">
									<span class="product-price">$70.00</span>
								</div>

								<div class="product-actions">
									<a href="#" class="addtocart" title="Agregar al carro">
										<i class="fa fa-shopping-cart"></i>
										<span>Agregar al carro</span>
									</a>
								</div>
							</div>
						</div>
					</li>

					
				</ul>
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