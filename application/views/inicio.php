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

		<!-- Head Libs -->
		<script src="<?=base_url('resources/vendor/modernizr/modernizr.min.js')?>"></script>
		<link rel="stylesheet" href="<?=base_url('resources/css/pnotify.custom.min.css')?>">

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 142, 'stickySetTop': '-36px', 'stickyChangeLogo': false}"  class=" transparent">
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
							<a href="whatsapp://send?text=Consulta pedido sitio WEB:&phone=+56992345011">
								<i style="color: green;" class="fa fa-whatsapp"></i> (+569) 9234 5011
							</a>
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
													<a href="<?=site_url('servicios/index')?>">
														Servicios
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
						<li><a href="<?=site_url('servicios/index')?>">Servicios</a></li>
						<li><a href="<?=site_url('nosotros/index')?>">Sobre nosotros</a></li>
						<li><a href="<?=site_url('contacto/index')?>">Contacto</a></li>
					</ul>
				</div>
			</div>
			
			<div id="mobile-menu-overlay"></div>

			<div role="main" class="main">
				
			<div class="slider-container rev_slider_wrapper" style="height: 688px;">
				<div id="revolutionSlider" class="slider rev_slider manual">
					<ul>
						<?php if ($anuncios != null): ?>
							<?php foreach ($anuncios as $key => $value): ?>
								<li data-transition="fade">
								<img src="<?=base_url('resources/img/slides/sl1.jpg')?>"  
									alt="slide bg"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat"
									class="rev-slidebg">

								<div class="tp-caption text-primary"
									data-x="left" data-hoffset="78"
									data-y="center" data-voffset="-40"
									data-start="500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5; font-size: 26px; text-transform: uppercase; font-weight:600; line-height:1;color:#2c3232;"
									data-mask_in="x:0px;y:0px;"><?= $value->get("anuncio_titulo")  ?></div>

								<div class="tp-caption"
									data-x="left" data-hoffset="73"
									data-y="center" data-voffset="12"
									data-start="1000"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5; font-size: 79px; text-transform: uppercase; font-weight:800; letter-spacing: -0.05em; padding-right: 0.05em;line-height:1;color:#2c3232;"
									data-mask_in="x:0px;y:0px;"><?= $value->get("anuncio_subtitulo")  ?></div>

								<div class="tp-caption"
									data-x="left" data-hoffset="78"
									data-y="center" data-voffset="70"
									data-start="1500"
									style="z-index: 5; font-size: 24px; font-weight: 300; line-height:1.5;color:#2c3232;"
									data-transform_in="y:[100%];opacity:0;s:500;"><?= $value->get("anuncio_texto")  ?>
									</div>
							</li>
							<?php endforeach ?>
						<?php endif ?>
					</ul>
				</div>
			</div>
			<div class="container">
				<h1 class="h1 heading-primary mt-lg clearfix center">VENTA Y ARRIENDO DE MAQUINAS</h1>
			</div>
			<div class="container">
				<ul class="products-grid columns4">
					<?php if ($categorias != null): ?>
						<?php foreach ($categorias as $key => $value): ?>
							<li>
								<div class="product">
									<figure class="product-image-area">
										<a href="<?=site_url('categoria/index/').$value->get("cat_id")?>" title="<?= $value->get("cat_nombre") ?>" class="product-image">
											<img src="<?=base_url('resources/img/categorias/').$value->get("cat_img_ruta")?>" alt="<?= $value->get("cat_nombre") ?>">
										</a>
									</figure>
									<div class="product-details-area">
										<h2 class="product-name"><a href="<?=site_url('categoria/index/').$value->get("cat_id")?>" title="<?= $value->get("cat_nombre")  ?>"><?= $value->get("cat_nombre")  ?></a></h2>
										<div class="product-price-box">
											<span class="product-price">
												<?= $value->get("cat_desc")  ?>
											</span>
										</div>
									</div>

								</div>
							</li>	
						<?php endforeach ?>
					<?php endif ?>
				</ul>
			</div>
			<br><br>

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
			        	<div class="row">
			        		<div class="col-md-6">
							  <label>Correo electrónico: (*)</label>
							  <input type="email" id="email_cliente" class="form-control" required>
			        		</div>
			        		<div class="col-md-6">
							  <label>Nombre: (*)</label>
							  <input type="text" id="nombre_cliente" class="form-control" required>	
			        		</div>
			        	</div>
					</div>
					<div class="form-group">
					  <label>Texto: (*)</label>
					  <textarea type="textarea" id="adicional_cliente" class="form-control" required></textarea>
					</div>
					<div class="form-group">
					  <label>Número de contacto:</label>
					  <input type="tel" id="adicional_cliente" class="form-control">
					</div>
					<p>(*) Campos requeridos.</p>
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

			<div class="clients-container">
				<div class="container">
					<div class="clients-wrapper">
						<div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow">
							<a title="Brema Ice Makers" class="client">
								<img class="img-responsive" src="<?=base_url('resources/img/marcas/marca.png')?>" alt="Brema Ice Makers">
							</a>
							<a title="Brema Ice Makers" class="client">
								<img class="img-responsive" src="<?=base_url('resources/img/marcas/brema.png')?>" alt="Brema Ice Makers">
							</a>
							<a title="ITV Ice Makers" class="client">
								<img class="img-responsive" src="<?=base_url('resources/img/marcas/itv.png')?>" alt="ITV Ice Makers">
							</a>
							<a title="Brema Ice Makers" class="client">
								<img class="img-responsive" src="<?=base_url('resources/img/marcas/marca.png')?>" alt="Brema Ice Makers">
							</a>
						</div>
					</div>
				</div>
			</div>
			

			</div>

			<footer id="footer" class="mt-none">
				
				<div class="footer-copyright">
					<div class="container">
						<a class="logo" href="http://www.hielogradocero.cl" target="_blank">
							<img title="Sitio web de venta de hielos" style="width: 120px;" alt="Sitio web de venta de hielos" class="img-responsive" src="<?=base_url('resources/img/hielogradocero.png')?>">
						</a>
						<a class="logo">
							<img title="Sitio web optimizado con HTML5" style="width: 120px;" alt="Sitio web optimizado con HTML5" class="img-responsive" src="<?=base_url('resources/img/html5.png')?>">
						</a>
						<!-- <ul class="social-icons">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul> -->
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


		<script src="<?=base_url('resources/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')?>"></script>
		<script src="<?=base_url('resources/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?=base_url('resources/js/views/view.contact.js')?>"></script>



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
					$("#detalle_foot").append('<tr><td style="text-align: right; color: red" colspan="2">NETO:</td><td style="text-align: right; color: red" colspan="2">$ '+totaltotal.format(0, 3, '.', ',')+'</tr><tr><td style="text-align: right; color: red" colspan="2">IVA (19%):</td><td style="text-align: right; color: red" colspan="2">$ '+(totaltotal*0.19).format(0, 3, '.', ',')+'</td></tr><tr><td style="text-align: right; color: red" colspan="2">TOTAL:</td><td style="text-align: right; color: red" colspan="2">$ '+(totaltotal*1.19).format(0, 3, '.', ',')+'</td></tr>');

				}else{
					alert("Lo sentimos no tiene ningun producto en su carrito de cotizaciones");
				}
			});

			$("#enviar_cotizacion").click(function(event) {
				var email = $.trim($("#email_cliente").val());
				var nombre = $.trim($("#nombre_cliente").val());
				var adicional = $.trim($("#adicional_cliente").val())
				var telefono = $.trim($("#telefono_cliente").val())
				var objcart = JSON.parse(localStorage.getItem("carrito"));;

				if (email != "" && telefono != "" && nombre != "" && adicional != "" && !$.isEmptyObject(objcart)) {
					$.ajax({
				          method:"POST",
				          url: "<?=site_url('/contacto/sendEmailCotizacion')?>",
				          datatype:'json',
				          data: {"name": nombre, "email": email,"message": adicional, "detalle": objcart ,telefono:telefono},
				          beforeSend:function (argument) {
				          	
				          },
				          success: function(response){
				              	if (response.val == 1)
				              	{
				              		new PNotify({
				                          title: 'Sí!',
				                          text: 'Mensaje enviado exitosamente!.',
				                          type: 'success'
				                      });
				              		$("#email_cliente").val("");
						            $("#nombre_cliente").val("");
						            $("#adicional_cliente").val("");
						            $("#telefono_cliente").val("");
						            localStorage.removeItem("carrito");
						            cargar_carrito();
				              	}else if(response.val == 0)
				              	{
				              		new PNotify({
				                      title: 'Oh No!',
				                      text: 'Algo salió mal.',
				                      type: 'info'
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
