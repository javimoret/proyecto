<?php include ("conexion.php");
$sql_detalles = $conexion -> query("SELECT * FROM detalles ");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Proyecto 1DAW - SOLVAM</title>

	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/pie.css">
	<link rel="stylesheet" href="css/menu.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- JS ================================================== -->

</head>

<body>
	<div id="principal">
		<div id="contenedor">
			<div id="logo">
				<div id="logo2"></div>
				<div id="texto">
					<h1><strong>DEPORTES AL DIA</strong></h1>
				</div>
			</div>
			<div class="menu">
				<ul class="menu">
					<li><a href="#arriba">Home</a>
						<ul class="submenu">
							<li><a href="#">Pagina 1</a></li>
							<li><a href="#">Pagina 2</a></li>
							<li><a href="#">Pagina 3</a></li>
					</li>
				</ul>
				<li><a href="#">Features</a></li>

				<li><a href="#">Pages</a>
					<ul class="submenu">
						<li><a href="#">Pagina 1</a></li>
						<li><a href="#">Pagina 2</a></li>
						<li><a href="#">Pagina 3</a></li>
				</li>
				</ul>

				<li><a href="#">Gallery</a>
					<ul class="submenu">
						<li><a href="#">Pagina 1</a></li>
						<li><a href="#">Pagina 2</a></li>
						<li><a href="#">Pagina 3</a></li>
					</ul>
				</li>
				<li><a href="#">Blog</a>
					<ul class="submenu">
						<li><a href="#">Pagina 1</a></li>
						<li><a href="#">Pagina 2</a></li>
						<li><a href="#">Pagina 3</a></li>
					</ul>
				</li>
				<li><a href="./contacto.html">Contacto</a></li>
				<li><a href="http://www.javimoret.com.es:8080/javimoret/ejerciciosjee/webapp/formulario.jsp">Acceso privado</a></li>
				</ul>
			</div>
			<div id="contenedor2">
				<div id="galeria">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<div id="noticia2">
				<h1 id="titulo">Titulo</h1>
				<br></br><br></br>
				<p>haefasfaefaefaefaeafwafawwf</p>
				<br></br><br></br>
				<p>wafawfawfawfwafwafwafawfawfw</p>
				<br></br><br></br>
				<a>Mas...</a>
			</div>

		</diV>

		<div id="contenido">
			<?php while($fila=$sql_detalles->fetch_array()){
				$id=$fila[3];
				$imagen=$fila[0];
				$titulo=$fila[1];
				$descripcion=$fila[2];
			
			?>

			<ul id="noticia">

			<a href="./detalles.php?id_detalle=<?php echo $id;?>">
				<li id="n1">
					<img src="img/<?php echo $imagen;?>" alt="barcelona.jpg" width="220px" height="220px">
					<a class="lupa"></a>
					<a  href="./detalles.php?id_detalle=<?php echo $id;?>" class="boton"></a>
					<div class="descripcion">descripcion</div>
				</li>
			<?php }	?>
				
			</ul>
		</div>


		<div id="pie">
			<div id="sobre">
				<div class="letrapie">SOBRE NOSOTROS</div><br><img id="logopie" src="./img/logo.jpg">
			</div>
			<div id="redes">
				<a href="https://es-es.facebook.com/" id="triangulo"></a>
				<a href="https://es-es.facebook.com/" id="wifi"></a>
				<a href="https://es-es.facebook.com/" id="bola"></a>
				<a href="https://twitter.com/?lang=es" id="twitter"></a>
				<a href="https://es-es.facebook.com/" id="facebook"></a>

			</div>
			<div id="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.4032619398267!2d-0.4429753238925298!3d39.482807871604976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604ff779223b39%3A0xc60596edf6e35ebd!2sCentro%20de%20FP%20SOLVAM!5e0!3m2!1ses!2ses!4v1684749810326!5m2!1ses!2ses" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
			<div id="latest"><p class="letrapie">LATEST POST</p><br><div></div></div>
			<div id="galeriapie">
				<p class="letrapie">FLICKR PHOTOS</p>
				<br>
				<div id="fotopie1"></div>
				<div id="fotopie2"></div>
				<div id="fotopie3"></div>
				<div id="fotopie4"></div>
				<div id="fotopie5"></div>
				<div id="fotopie6"></div>
				<div id="fotopie7"></div>
				<div id="fotopie8"></div>
				<div id="fotopie9"></div>
				<div id="fotopie10"></div>
				<div id="fotopie11"></div>
				<div id="fotopie12"></div>
			</div>
			<div class="menupie">
				<ul class="menu">
				<li><a class= "amenupie" href="#">Home</a>
					<ul class="submenu">
						<li><a href="#">Pagina 1</a></li>
						<li><a href="#">Pagina 2</a></li>
						<li><a href="#">Pagina 3</a></li>
				</li>
			</ul>
			<li><a class= "amenupie" href="#">Features</a></li>

			<li><a class= "amenupie" href="#">Pages</a>
				<ul class="submenu">
					<li><a href="#">Pagina 1</a></li>
					<li><a href="#">Pagina 2</a></li>
					<li><a href="#">Pagina 3</a></li>
			</li>
			</ul>

			<li><a class= "amenupie" href="#">Gallery</a>
				<ul class="submenu">
					<li><a href="#">Pagina 1</a></li>
					<li><a href="#">Pagina 2</a></li>
					<li><a href="#">Pagina 3</a></li>
				</ul>
			</li>
			<li><a class= "amenupie" href="#">Blog</a>
				<ul class="submenu">
					<li><a href="#">Pagina 1</a></li>
					<li><a href="#">Pagina 2</a></li>
					<li><a href="#">Pagina 3</a></li>
				</ul>
			</li>
			<li><a class= "amenupie" href="#">Contacto</a></li>
			</ul></div>

			<div id="arriba2"><a href="./index.html"><img src="./img/back-top-btn.png"></a></div>
		</div>

	</div>
</body>

</html>


