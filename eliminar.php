<?php
$id=$_GET['id'];
include_once 'conexion.php';

$con=conexion();
$sql="DELETE FROM imagenes WHERE id=$id";

$query=mysqli_query($con,$sql);
if($query){
    header("refresh:0;url=mostrar_imagen.php");
}else{
    echo "Error al eliminar";
}
?>