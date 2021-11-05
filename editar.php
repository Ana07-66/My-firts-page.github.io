<?php 
    include('base.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>Editar Producto</title>
</head>
<body>

<?php
    if (isset($_POST['enviar'])) {

        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $cantidad=$_POST['cantidad'];
        $precio=$_POST['precio'];
        $autor=$_POST['autor'];

        $sql="UPDATE galletas SET nombre='".$nombre."', cantidad='".$cantidad."', precio='".$precio."', autor='".$autor."' WHERE id='".$id."' ";

        $resultado=mysqli_query($conexion,$sql);
        if($resultado) {
            header("location:listado.php");
        } else {
            ?>
            <?php 
            include("listado.php");
            ?>
            <h1 style="margint-top: -80px; color:#fff;" class="bad">No se realizo la actualizacion</h1>
            <?php
        }

        mysqli_close($conexion);    

    } else {

        $id=$_GET['id'];
        $sql="SELECT * FROM galletas WHERE id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);

        $fila=mysqli_fetch_assoc($resultado);
        $nombre=$fila['nombre'];
        $cantidad=$fila['cantidad'];
        $precio=$fila['precio'];
        $autor=$fila['autor'];


?>

    <div class="container">
        <h2>Editar galleta</h2>

        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
        <div class="container-opt">
                <p>Nombre de la galleta:</p>
                <input type="text" name="nombre" placeholder="Nombre de la galleta" value="<?php echo $nombre; ?>">
            </div>
            <div class="container-opt">
                <p>Cantidad en almacén:</p>
                <input type="number" name="cantidad" placeholder="Cantidad disponible" value="<?php echo $cantidad; ?>">
            </div>
            <div class="container-opt">
                <p>Precio de la galleta:</p>
                <input type="text" name="precio" placeholder="Precio recomendado" value="<?php echo $precio; ?>">
            </div>
            <div class="container-opt">
                <p>Autor:</p>
                <input type="text" name="autor" placeholder="Autor" value="<?php echo $autor; ?>">
            </div>

            <div class="container-opt">
                <input type="hidden"  name="id" placeholder="id" value="<?php echo $id; ?>">
            </div>

            <input class="btn-submit" type="submit" name="enviar" value="Actualizar">
            <a href="listado.php">Volver al listado</a>
        </form>
        <?php
    }
        ?>
    </div>
    
</body>
</html>