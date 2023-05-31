<?php
$conexion = new mysqli ("javimoret.com.es","javimoret","okiserreta127","jm_trabajomarcas");
if ($conexion->connect_error){
    die('No se ha podido conectar a la base de datos');
    }else
    {
        echo "conectada";
    }
?>