<?php
$email=$_POST['correo'];
$password=$_POST['password'];

session_start();

$_SESSION['correo']=$email;
include('base.php');
$consulta="SELECT*FROM usuarios where correo='$email' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas) {
    header("location:listado.php");
} else {
    ?>
    <?php 
    include("index.php");
    ?>
    <h1 style="margint-top: -80px; color:#fff;" class="bad">Error en las credenciales de autorización</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);






