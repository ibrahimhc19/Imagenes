<?php
include_once "conexion.php";
$con = conexion();

$id = $_GET['id'];

$sql="SELECT * FROM imagenes where id='$id'";
$query =mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar imagen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-md-4">
                <form action="accion.php" method="POST" enctype="multipart/form-data" class="shadow-lg p-4 border border-1 rounded">
                    <legend class="text-center">Actualizar Imagen</legend>
                    <div class="mb-3">
                        <img class="w-100 rounded" src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cambiar:</label>
                        <input type="file" class="form-control" name="foto" required>
                        <input hidden name="id" type="number" class="form-control"  value="<?= $row['id']?>">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Actualizar</button>
                </form>
            </div>
        </div>
    </div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>