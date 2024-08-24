
<?php
    function conexion(){
        $conexion = mysqli_connect('localhost', 'root', '', 'empresa', '3306');
        if($conexion){
            return $conexion;
        }else{
            return "Error en la conexión";
        }
    }
?>



<?php

$host 		 = "localhost";
$usuariodb 	 = "root";
$clavedb 	 = "";
$basededatos = "empresa";

$conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);

 if ($conexion->connect_errno) {
 	echo "<h2><b>ERROR DE CONEXION</b></h2>";
 	exit();
 }
?>