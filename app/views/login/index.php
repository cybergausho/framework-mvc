<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php require 'app/views/header.php';?>
    <div id="main">
    <h1 class="center">Ingresar usuario</h1>
    <form action="<?php echo constant('BASE_URL')?>login/insertar" method="post">
        <p>
        <label for="nombre">Nombre</label></br>
        <input type="text" name="nombre">
        </p>
        <p>
        <label for="apellido">Apellido</label></br>
        <input type="text" name="apellido">
        </p>
        <p>
        <label for="nro_documento">Documento</label></br>
        <input type="text" name="nro_documento">
        </p>
        <p>
        <label for="passw">Contraseña</label></br>
        <input type="password" name="passw">
        </p>
        <input type="submit" value="Acceder">
    </form>

    </div>
    <?php require 'app/views/footer.php';?>

    
</body>
</html>
