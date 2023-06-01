<?php include("conexion.php");
$id_detalle = $_GET['id_detalle'];
$sql_detalles = $conexion->query("SELECT * FROM detalles WHERE id=$id_detalle");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/pie.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/detalles.css">


</head>

<body>



    <div id="principal">
        <div id="arriba">
            <?php include('menu.php'); ?>

        </div>
        <div id="medio">
            <?php while ($fila = $sql_detalles->fetch_array()) {

                $id = $fila[3];
                $titulo = $fila[1];
                $descripcion = $fila[2];
                $imagen = $fila[0];
                ?>
            <?php } ?>
            <div id="izquierda">
                <div id="imagennoticia">
                    <img src="img/<?php echo $imagen; ?>  " width="570px" height="770px" />
                </div>
            </div>
            <div id="derecha">
                <div id="titulonoticia">
                    <h1>
                        <?php echo $titulo; ?>
                    </h1>
                </div>
                <div id="textonoticia">
                    <h1>
                        <?php echo $descripcion; ?>
                    </h1>
                </div>


                

            </div>
            <a href="https://www.marca.com/" id="m">Mas informacion</a>
            <a href="./index.php" id="v"> Volver atras</a>
        </div>

        <div id="bajo">
            <div id="pie">
                <div id="sobre">
                    <div class="letrapie">SOBRE NOSOTROS</div><br><img id="logopie" src="./img/logo.jpg">
                </div>
                <div id="redes">
                    <div id="triangulo"></div>
                    <div id="wifi"></div>
                    <div id="bola"></div>
                    <div id="twitter"></div>
                    <div id="facebook"></div>

                </div>
                <div id="mapa"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.4032619398267!2d-0.4429753238925298!3d39.482807871604976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604ff779223b39%3A0xc60596edf6e35ebd!2sCentro%20de%20FP%20SOLVAM!5e0!3m2!1ses!2ses!4v1684749810326!5m2!1ses!2ses"
                        width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                <div id="latest">
                    <p class="letrapie">LATEST POST</p><br>
                    <div></div>
                </div>
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
                        <li><a class="amenupie" href="#">Home</a>
                            <ul class="submenu">
                                <li><a href="#">Pagina 1</a></li>
                                <li><a href="#">Pagina 2</a></li>
                                <li><a href="#">Pagina 3</a></li>
                        </li>
                    </ul>
                    <li><a class="amenupie" href="#">Features</a></li>

                    <li><a class="amenupie" href="#">Pages</a>
                        <ul class="submenu">
                            <li><a href="#">Pagina 1</a></li>
                            <li><a href="#">Pagina 2</a></li>
                            <li><a href="#">Pagina 3</a></li>
                    </li>
                    </ul>

                    <li><a class="amenupie" href="#">Gallery</a>
                        <ul class="submenu">
                            <li><a href="#">Pagina 1</a></li>
                            <li><a href="#">Pagina 2</a></li>
                            <li><a href="#">Pagina 3</a></li>
                        </ul>
                    </li>
                    <li><a class="amenupie" href="#">Blog</a>
                        <ul class="submenu">
                            <li><a href="#">Pagina 1</a></li>
                            <li><a href="#">Pagina 2</a></li>
                            <li><a href="#">Pagina 3</a></li>
                        </ul>
                    </li>
                    <li><a class="amenupie" href="#">Contacto</a></li>
                    </ul>
                </div>

                <div id="arriba2"><a href="./index.html"><img src="./img/back-top-btn.png"></a></div>
            </div>
        </div>


    </div>










</body>

</html>