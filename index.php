<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>  
		<script type="text/javascript" src="js/Vegur_300.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
		<script type="text/javascript" src="js/tms-0.3.js"></script>
		<script type="text/javascript" src="js/tms_presets.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/atooltip.jquery.js"></script>
		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
		<![endif]-->
		<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
			</div>
		<![endif]-->
	</head>


	<body id="page1">
		<div class="main">
<!--header -->
			<header>
				<div class="wrapper">
					<h1><a href="index.php" id="logo">Pireo Productora</a></h1>
					
				</div>
				<nav>
					<ul id="menu">
						<li class="active"><a href="index.php"><span>Inicio</span></a></li>
						<li><a href="Cotizacion.php"><span>Cotización</span></a></li>
						<li><a href="Services.php"><span>Catalogo servicios</span></a></li>
						<li><a href="Agenda.php"><span>Agenda</span></a></li>
						<li class="last"><a href="Contacts.php"><span>Contacto</span></a></li>
					</ul>
				</nav>
				<div id="slider">
					<ul class="items">
						<li>
							<img src="images/img1.jpg" alt="">
							<div class="banner">
								<span class="title"><span class="color2">We Have</span><span class="color1">Cotiza</span><span>Anticipadamente</span></span>
								<p>Con nuestra plataforma los distintos tipos de servicios disponibles: artistas, indumentarias, local, transportes, servicios de bar, repostería, personal y hasta publicidad para tu evento! </p>
								
							</div>
						</li>
						<li>
							<img src="images/img2.jpg" alt="">
							<div class="banner">
								<span class="title"><span class="color2">Todo</span><span class="color1">tipo</span><span>de eventos</span></span>
								<p>shows, bodas, cumpleaños, empresas, despedidas, conciertos, etc...</p>
								
							</div>
						</li>
						<li>
							<img src="images/img3.jpg" alt="">
							<div class="banner">
								<span class="title"><span class="color2">La mejor</span><span class="color1">atencion</span><span>sin preocupaciones</span></span>
								<p>Deja en manos de nuestros productores, todas las gestiones necesarias para tu evento</p>
								
							</div>
						</li>
					</ul>
				</div>
			</header>
<!--header end-->
<!--content -->

<p> </p>
<p> </p>
<p> </p>

			
					
				<!-- {%FOOTER_LINK} -->
			</footer>
<!--footer end-->
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
		<script>
			$(window).load(function(){
				$('#slider')._TMS({
					banners:true,
					waitBannerAnimation:false,
					preset:'diagonalFade',
					easing:'easeOutQuad',
					pagination:true,
					duration:400,
					slideshow:8000,
					bannerShow:function(banner){
						banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
					},
					bannerHide:function(banner){
						banner.stop().animate({marginRight:-500}, 600)
					}
					})
			})
		</script>
	</body>
</html>