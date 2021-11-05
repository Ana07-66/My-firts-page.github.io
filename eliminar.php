<?php

$id=$_GET['id'];
include('base.php');


$sql="DELETE FROM galletas WHERE id=' ".$id." ' ";
$resultado=mysqli_query($conexion,$sql);


if($resultado) {
    header("location:listado.php");
} else {
    ?>
    <?php 
    include("listado.php");
    ?>
    <h1 style="margint-top: -80px; color:#fff;" class="bad">No se elimino el producto seleccionado.</h1>
    <?php
}


?>