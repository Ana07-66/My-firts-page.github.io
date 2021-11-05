<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
<div class="contenedor-formulario">
<div class="formulario-login">
    <form class="estilo-formulario" action="validacion.php" method="post">
      <h1>INGRESA</h1>
       <div class="opcion-contenido">
         <p>CORREO</p>
         <input type="text" placeholder="Correo" name="correo">
       </div>
       <div class="opcion-contenido">
          <p>PASSWORD</p>
          <input type="password" placeholder="Password" name="password">
        </div>
        <input class="btn-enviar" type="submit" value="Login">
    </form>
</div>
</div>
</body>
</html>