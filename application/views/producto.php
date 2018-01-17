<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Fríometal</title>	

		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=base_url('resources/img/logos/friometal.ico')?>" type="image/x-icon" />
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
		<style type="text/css">
			.embed-container {
			    position: relative;
			    padding-bottom: 56.25%;
			    height: 0;
			    overflow: hidden;
			}
			.embed-container iframe {
			    position: absolute;
			    top:0;
			    left: 0;
			    width: 100%;
			    height: 100%;
			}
		</style>
	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 142, 'stickySetTop': '-36px', 'stickyChangeLogo': false}"  class="">
				<div class="header-body">
					<div class="header-top">
						<div class="container">
							

							<div class="cart-dropdown">
									<a href="#" class="cart-dropdown-icon">
										<i class="minicart-icon"></i>
										<span class="cart-info">
											<span id="cart-qty" class="cart-qty">0</span>
											<span class="cart-text">Producto(s)</span>
										</span>
									</a>

									<div class="cart-dropdownmenu right">
										<div class="dropdownmenu-wrapper">
											<div class="cart-products">


											<div id="list_cart" class="product product-sm">
												
											</div>
											</div>

											<div class="cart-totals">
												Total: <span id="totalcart">$0</span>
											</div>

											<div class="cart-actions">
												<a href="#" class="btn btn-success">Confirmar</a>
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
										<img alt="Friometal" width="111" height="51" src="<?=base_url('resources/img/logos/friometal_logo.png')?>">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="row">
									<div class="header-nav-main header-nav-right">
										<nav>
											<ul class="nav nav-pills" id="sideNav">
												<li class="pull-right">
													<a href="<?=site_url('contacto/index')?>">
														Contacto
													</a>
												</li>
												<li class="pull-right">
													<a href="<?=site_url('nosotros/index')?>">
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
						<li><a href="<?=site_url('nosotros/index')?>">Sobre nosotros</a></li>
						<li><a href="<?=site_url('contacto/index')?>">Contacto</a></li>
					</ul>
				</div>
			</div>
			
			<div id="mobile-menu-overlay"></div>

			<div role="main" class="main">

			<section class="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="demo-shop-17.html">Inicio</a></li>

						<li><a href="demo-shop-17-category-3col.html">Categoría</a></li>
						<li class="active">Producto</li>
					</ul>
				</div>
			</section>
			
			<div class="container">
				<div class="product-view">
					<div class="product-essential">
						<div class="row">
							<div class="product-img-box col-sm-5">
								<div class="product-img-box-wrapper">
                                    <div class="" ss="product-img-wrapper">
                                    	<img id="product-zoom" src="<?=base_url('resources/img/products/').$producto->get("prod_imagen1") ?>" data-zoom-image="<?=base_url('resources/img/demos/shop/products/single/product1.jpg')?>" alt="Product main image">
                                    </div>
								</div>

								<div class="owl-carousel manual" id="productGalleryThumbs">
									<div class="product-img-wrapper">
										<a href="#" data-image="<?=base_url('resources/img/products/').$producto->get("prod_imagen1") ?>" data-zoom-image="<?=base_url('resources/img/products/').$producto->get("prod_imagen1") ?>" class="product-gallery-item">
                                            <img src="<?=base_url('resources/img/products/').$producto->get("prod_imagen1") ?>" alt="product">
                                        </a>
									</div>
									<div class="product-img-wrapper">
										<a href="#" data-image="<?=base_url('resources/img/products/').$producto->get("prod_imagen2") ?>" data-zoom-image="<?=base_url('resources/img/products/').$producto->get("prod_imagen2") ?>" class="product-gallery-item">
                                            <img src="<?=base_url('resources/img/products/').$producto->get("prod_imagen2") ?>" alt="product">
                                        </a>
									</div>
									
								</div>
							</div>

							<div class="product-details-box col-sm-7">
								<h1 class="product-name">
									<?= $producto->get("prod_nombre"); ?> (<?= $producto->get("modelo_nombre")."-".$producto->get("marca_nombre")  ?>)
									<div class="product-label">
										<span class="discount"></span>
									</div><br>
									<div class="product-label">
										<u>Producto</u>:
										<span style="color: #3685c0;"><?= $producto->get("prod_tipo") ?></span>
									</div>
								</h1>

                                <div class="product-short-desc">
									<p><?= $producto->get("prod_desc");  ?></p>
								</div>
								
								<div class="product-detail-info">
									<div class="product-price-box">
										<span class="product-price"><?= $producto->moneda_chilena();  ?></span>
									</div>
									<p class="availability">
										<span class="font-weight-semibold">Disponible:</span>
										En <?= $producto->get("prod_rentorsale") ?>
									</p>
								</div>

								<div class="product-actions">
									<div class="product-detail-qty">
                                        <input type="text" value="1" id="cantidad_<?= $producto->get("prod_id") ?>" class="vertical-spinner product-vqty">
                                    </div>
									<a href="#" idprod="<?= $producto->get("prod_id") ?>" nom="<?= $producto->get("prod_nombre") ?>" precio="<?= $producto->get("prod_precio") ?>" precio_formated="<?= $producto->moneda_chilena() ?>" class="addtocart" title="Agregar al carro">
										<i class="fa fa-shopping-cart"></i>
										<span>Agregar al carro</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tabs product-tabs">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#product-desc" data-toggle="tab">Video</a>
							</li>
							<li>
								<a href="#product-reviews" data-toggle="tab">Especificaciones</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="product-desc" class="tab-pane active">
								<div class="product-desc-area">
									<div class="embed-container">
										<iframe width="854" height="480" src="https://www.youtube.com/embed/C_mQqK-H0us" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<!-- de este link          https://www.youtube.com/watch?v=C_mQqK-H0us
								 tiene pasar a ser asi https://www.youtube.com/embed/C_mQqK-H0us
								  -->
							<div id="product-reviews" class="tab-pane">

								<div class="add-product-review">
									<h3 class="text-uppercase heading-text-color font-weight-semibold">Aquí encontrarás todo tipo de información relacionada al producto</h3>
									<p>Desea ver mas información de este producto? *</p>

									<a href="<?= $producto->get("prod_link_esp") ?>" class="fa fa-file-pdf-o" title="Manual">&nbsp;Manual de uso</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			</div>
			<footer id="footer">
				<div class="footer-copyright">
					<div class="container">
						<a class="logo">
							<img title="Sitio web optimizado con HTML5" style="width: 120px;" alt="Sitio web optimizado con HTML5" class="img-responsive" src="<?=base_url('resources/img/html5.png')?>">
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

		<script src="<?=base_url('resources/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.js')?>"></script>
		<script src="<?=base_url('resources/vendor/elevatezoom/jquery.elevatezoom.js')?>"></script>

		<!-- Demo -->
		<script src="<?=base_url('resources/js/demos/demo-shop-17.js')?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?=base_url('resources/js/custom.js')?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?=base_url('resources/js/theme.init.js')?>"></script>

		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581b726c069c6315"></script>

				<script type="text/javascript" charset="utf-8" >

			$(function (argument) {
				cargar_carrito();
			})

			$(".addtocart").click(function (argument) {
				var oldItems = JSON.parse(localStorage.getItem('carrito')) || [];
				var productos_carrito = new Array();
				var id = $(this).attr("idprod");
				var nom = $(this).attr("nom");
				var precio = $(this).attr("precio");
				var precioformated = $(this).attr("precio_formated");
				var cantidad = $("#cantidad_"+id).val() || 1;
				var flag = false;
				var objcart = JSON.parse(localStorage.getItem("carrito"));

				if (!$.isEmptyObject(objcart)) {
					$.each(objcart, function(index, val) {
						if (val.id == id)flag = true;
					});
				};
				if (flag == false) {
						var newItem = {"id":id,"nom":nom,"precio":precio,"precioformated":precioformated,"cantidad":cantidad};
						oldItems.push(newItem);

					};

				localStorage.setItem('carrito', JSON.stringify(oldItems));
				cargar_carrito();
			})

			$(document).on('click', '.removecart', function(event) {
				var id = $(this).attr("idremove");
				var objcart = JSON.parse(localStorage.getItem("carrito")) || [];

				var idaeliminar = 0;
				if (!$.isEmptyObject(objcart)) {
					$.each(objcart, function(index, val) {
						if (parseInt(val.id) == parseInt(id))idaeliminar = index;
					});
					objcart.splice(idaeliminar, 1);
				};
				localStorage.setItem('carrito', JSON.stringify(objcart));
				cargar_carrito();
			});

			function cargar_carrito () {
				$("#list_cart").text("");
				var i = 0;
				var  total = 0;
				var objcart = JSON.parse(localStorage.getItem("carrito"));
				$.each(objcart, function(index, val) {
					$("#list_cart").append('<a class="fa fa-times removecart" idremove="'+val.id+'" ></a><div class="product-details-area"><h2 class="product-name"><a title="'+val.nom+'">'+val.nom+'</a></h2><div class="cart-qty-price">'+val.cantidad+' X <span class="product-price">'+val.precioformated+'</span></div></div>');
					total += parseInt(val.precio)*parseInt(val.cantidad);
					 i++;
				});
				$("#cart-qty").text(i);
				$("#totalcart").text(total.format(0, 3, '.', ','));
			}

			Number.prototype.format = function(n, x, s, c) {
			    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
			        num = this.toFixed(Math.max(0, ~~n));

			    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
			};


			/*input spinner*/
			$(function() {
			    var action;
			    $(".number-spinner button").on('mousedown touchstart', function () {
			        btn = $(this);
			        input = btn.closest('.number-spinner').find('input');
			        btn.closest('.number-spinner').find('button').prop("disabled", false);

			    	if (btn.attr('data-dir') == 'up') {
			            action = setInterval(function(){
			                if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
			                    input.val(parseInt(input.val())+1);
			                }else{
			                    btn.prop("disabled", true);
			                    clearInterval(action);
			                }
			            }, 50);
			    	} else {
			            action = setInterval(function(){
			                if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
			                    input.val(parseInt(input.val())-1);
			                }else{
			                    btn.prop("disabled", true);
			                    clearInterval(action);
			                }
			            }, 50);
			    	}
			    }).on('mouseup touchend', function () {
			        clearInterval(action);
			    });
			});
			/*input spinner*/





		</script>


	</body>
</html>
