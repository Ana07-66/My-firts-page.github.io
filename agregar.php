<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/agregar.css">
    <title>Agregar Producto</title>
</head>
<body>
    <?php 
        if(isset($_POST['enviar'])) {
            $nombre=$_POST['nombre'];
            $cantidad=$_POST['cantidad'];
            $precio=$_POST['precio'];
            $autor=$_POST['autor'];

            include('base.php');
            $sql="INSERT INTO galletas(nombre,cantidad,precio,autor)
            values('".$nombre."', '".$cantidad."', '".$precio."', '".$autor."')";

            $resultado=mysqli_query($conexion,$sql);

            if($resultado) {
                header("location:listado.php");
            } else {
                ?>
                <?php 
                include("listado.php");
                ?>
                <h1 style="margint-top: -80px; color:#fff;" class="bad">No se realizo el registro</h1>
                <?php
            }
            mysqli_close($conexion);

        } else {
    ?>
    <div class="container">
        <h2>AGREGAR NUEVA GALLETA</h2>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <div class="container-opt">
                <p>Nombre de la galleta:</p>
                <input type="text" name="nombre" placeholder="Nombre de la galleta">
            </div>
            <div class="container-opt">
                <p>Cantidad disponible:</p>
                <input type="number" name="cantidad" placeholder="Cantidad disponible">
            </div>
            <div class="container-opt">
                <p>Precio:</p>
                <input type="text" name="precio" placeholder="Precio recomendado">
            </div>
            <div class="container-opt">
                <p>Autor:</p>
                <input type="text" name="autor" placeholder="Autor">
            </div>

            <input class="btn-submit" type="submit" name="enviar" value="Agregar">
            <a href="listado.php">Regresar al inventario</a>

        </form>
        <?php
        }
        ?>
    </div>
</body>
</html>