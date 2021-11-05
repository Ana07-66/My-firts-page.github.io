<?php
    include('base.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listado.css">
    <title>Inventario de galletas</title>
</head>
<body>
    <h2>Listado de galletas</h2>
    <div class="contenedor-tabla">
        <div class="tabla-usuarios">
          <table>
            <tr class="list-opt">
              <th>ID</th>
              <th>Nombre de la galleta</th>
              <th>Cantidad disponble en almacén</th>
              <th>Precio</th>
              <th>Autor</th>
              <th>Acciones</th>
            </tr>
                <?php
                $query = mysqli_query($conexion, "SELECT * FROM galletas");
                $result = mysqli_num_rows($query);
                if($result) {
                    while($data = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr class="list-opt">
                        <td>
                          <?php echo $data['id'] ?>
                        </td>
                        <td>
                          <?php echo $data['nombre'] ?>
                        </td>
                        <td>
                          No.cajas:
                          <?php echo $data['cantidad'] ?>
                        </td>
                        <td>$
                          <?php echo $data['precio'] ?>
                        </td>
                        <td>
                          <?php echo $data['autor'] ?>
                        </td>
                        <td>
                          <?php echo "<a style='color:#35a7a3; text-decoration: none; font-size: 14px;' href='editar.php?id=".$data['id']."'>Editar</a>"?> -
                          <?php echo "<a style='color:#35a7a3; text-decoration: none; font-size: 14px;' href='eliminar.php?id=".$data['id']."'>Eliminar</a>"?>
                        </td>
                        </tr>
                        <?php
                    } 
                }
                ?>
            </table>

            <div class="container-btn-new">
              <a class="btn-new" href="agregar.php">Registrar producto</a>
            </div>
     </div>
   </div>
</body>
</html>