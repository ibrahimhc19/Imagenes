<?php
    $id            = $_POST['id'];
    $tipoArchivo   = $_FILES['foto']['type'];
    $nombreArchivo = $_FILES['foto']['name'];
    $tamanoArchivo = $_FILES['foto']['size'];
    
    //La función fopen() devuelve un puntero a un tipo de estructura FILE que se puede utilizar para acceder al archivo abierto.
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');

    //La función fread lee para contar elementos de tamaño en bytes del flujo de entrada y los almacena en el búfer
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);

    include("conexion.php");
    $con = mysqli_connect($host, $usuariodb, $clavedb, $basededatos);
    //La funcion mysqli_escape_string  escapa caracteres especiales en una cadena para usar en una consulta SQL, teniendo en cuenta el conjunto de caracteres actual de la conexión
        
    $binariosImagen = mysqli_escape_string($con, $binariosImagen);
    $query = "UPDATE imagenes SET  nombre='$nombreArchivo', imagen='$binariosImagen', tipo='$tipoArchivo' WHERE id = '$id' ";

    $res = mysqli_query($con, $query);

    if( $query ){
        header("refresh:0;url=mostrar_imagen.php");
    }
    
?>