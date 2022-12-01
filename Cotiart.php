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
	<body id="page4">
		<div class="main">
<!--header -->
			<header>
				<div class="wrapper">
					<h1><a href="index.php" id="logo">Superior.com</a></h1>
					
				</div>

		<?php  
		echo "<h3 style='background-color: #369; color: #FFF'>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";

		//	header("Content-Type: text/html; charset=utf-8");
			$cadena = "host=plop.inf.udec.cl port=5432 dbname=Productora user=UbdIg password=udb2016g";
			$conexion = pg_connect($cadena) or die("Error de conexion.".pg_last_error());
		
echo "<h3 style='background-color: #369; color: #FFF'>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";

		//	$query = pg_query($conexion,"select * from proyecto.arbitro");
			
			?>
				<nav>
					<ul id="menu">
						<li ><a href="index.php"><span>Inicio</span></a></li>
						<li><a href="Cotizacion.php"><span>Cotización</span></a></li>
						<li class="active"><a href="Services.php"><span>Catalogo servicios</span></a></li>
						<li><a href="Agenda.php"><span>Agenda</span></a></li>
						<li class="last"><a href="Contacts.php"><span>Contacto</span></a></li>
					</ul>
				</nav>
			</header>
<!--header end-->
<!--content -->
			<article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
				<form>

				<nav>
					<ul id="menu">
						<li class="active"><a href="Cotiart.php"><span>Artistas</span></a></li>
						<li ><a href="Cotibar.php"><span>Servicios de bar</span></a></li>
						<li ><a href="Cotitran.php"><span>Transporte</span></a></li>
						<li ><a href="Cotiper.php"><span>Personal</span></a></li>	
						<p> </p>
<p> </p>

						<li ><a href="Cotipubli.php"><span>Publicidad</span></a></li>
						<li ><a href="CotiLocal.php"><span>Arriendo Locales</span></a></li>
						<li ><a href="Cotiind.php"><span>Indumentaria</span></a></li>
						<li ><a href="CotiRep.php"><span>Repostería</span></a></li>
						<p> </p>

					</ul>
				</nav>
  
</form>
				</article>
			</div>
		</div>
		<div class="main">
<!--content end-->
<!--footer -->
			<footer>
				
				
				<!-- {%FOOTER_LINK} -->
			</footer>
<!--footer end-->
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>