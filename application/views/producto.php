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
		<link rel="stylesheet" href="<?=base_url('resources/css/pnotify.custom.min.css')?>">
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
											<a class="btn btn-success" data-toggle="modal" id="cargar_detalle_cotizacion" data-target="#myModal">Confirmar</a>
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
						<li><a href="<?=site_url('/')?>">Inicio</a></li>

						<li><a href="<?=site_url('categoria/index/').$producto->get("prod_cat_id") ?>">Categoría</a></li>
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
                                    	<img id="product-zoom" src="<?=base_url('resources/img/products/').$producto->get("prod_imagen1") ?>" data-zoom-image="<?=base_url('resources/img/products/').$producto->get("prod_imagen1") ?>" alt="Product main image">
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
										<div class="video">
											<iframe width="640" height="360" src="<?= $producto->get("prod_link_video") ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
							<div id="product-reviews" class="tab-pane">

								<div class="add-product-review">
									<h3 class="text-uppercase heading-text-color font-weight-semibold">Aquí encontrarás todo tipo de información relacionada al producto</h3>
									<p>Desea ver mas información de este producto? *</p>

									<a href="<?= $producto->get("prod_link_esp") ?>" target="_blank" class="fa fa-file-pdf-o" title="Manual">&nbsp;Manual de uso</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			</div>

			   <!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Ingrese sus datos para entregar la cotización.</h4>
			      </div>
			      <div class="modal-body">
			        <div class="form-group">
					  <label>Correo electrónico:</label>
					  <input type="email" id="email_cliente" class="form-control">
					</div>
			        <div class="form-group">
					  <label>Nombre:</label>
					  <input type="text" id="nombre_cliente" class="form-control">
					</div>
					<div class="form-group">
					  <label>Texto:</label>
					  <input type="text" id="adicional_cliente" class="form-control">
					</div>

			      </div>
			      <div class="modal-body">
			        <div class="form-group">
					  <label>Detalle:</label>
					  <div class="table-responsive">
					  	<table class="table">
							<thead>
								<tr>
									<th>
										Nombre
									</th>
									<th>
										Precio/Unitario
									</th>
									<th>
										Cantidad
									</th>
									<th>
										Total
									</th>
								</tr>
							</thead>
							<tbody id="detalle_cotizacion"></tbody>
							<tfoot id="detalle_foot"></tfoot>
						</table>
					  </div>
					</div>
			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        <button type="button" class="btn btn-success" id="enviar_cotizacion" data-dismiss="modal">Enviar</button>
			      </div>
			    </div>

			  </div>
			</div>
			<!-- Modal -->
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
		<script src="<?=base_url('resources/js/pnotify.custom.min.js')?>"></script>

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
				new PNotify({
                          title: 'Bien!',
                          text: 'Producto añadido correctamente!.',
                          type: 'success',
                          delay: 1000
                      });
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

			$("#cargar_detalle_cotizacion").click(function(event) {
				$("#detalle_cotizacion, #detalle_foot").text("");
				var objcart = JSON.parse(localStorage.getItem("carrito"));;

				if (!$.isEmptyObject(objcart)) {
				var totaltotal = 0;
					$.each(objcart, function(index, val) {
						var total = parseInt(val.precio)*parseInt(val.cantidad);
						$("#detalle_cotizacion").append('<tr><td>'+val.nom+'</td><td>'+val.precioformated+'</td><td>'+val.cantidad+'</td><td>$ '+total.format(0, 3, '.', ',')+'</td></tr>');
						totaltotal += total;
					});
					$("#detalle_foot").append('<tr><td style="text-align: right; color: red" colspan="2">Total:</td><td style="text-align: center; color: red" colspan="2">$ '+totaltotal.format(0, 3, '.', ',')+'</td></tr>')
				}else{
					alert("Lo sentimos no tiene ningun producto en su carrito de cotizaciones");
				}
			});

			$("#enviar_cotizacion").click(function(event) {
				var email = $.trim($("#email_cliente").val());
				var nombre = $.trim($("#nombre_cliente").val());
				var adicional = $.trim($("#adicional_cliente").val())
				var objcart = JSON.parse(localStorage.getItem("carrito"));;

				if (email != "" && nombre != "" && adicional != "" && !$.isEmptyObject(objcart)) {
					$.ajax({
				          method:"POST",
				          url: "<?=site_url('/contacto/sendEmailCotizacion')?>",
				          datatype:'json',
				          data: {"nombre": nombre, "email": email,"adicional": adicional, "detalle": objcart},
				          success: function(response){
				              	if (response.val == 1)
				              	{
				              		new PNotify({
				                          title: 'Sí!',
				                          text: 'Mensaje enviado exitosamente!.',
				                          type: 'success',
				                          delay: 1000
				                      });
				              		$("#email_cliente").val("");
						            $("#nombre_cliente").val("");
						            $("#adicional_cliente").val("");
				              	}else if(response.val == 0)
				              	{
				              		new PNotify({
				                      title: 'Oh No!',
				                      text: 'Algo salió mal.',
				                      type: 'notice',
				                      delay: 1000
				                  });
				              	}
				              }
				          });	
				}else{
					alert("Lo sentimos existen campos vacíos o no posee productos en su carrito, favor revisar.");
				}

			});

			Number.prototype.format = function(n, x, s, c) {
			    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
			        num = this.toFixed(Math.max(0, ~~n));

			    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
			};


		</script>


	</body>
</html>
