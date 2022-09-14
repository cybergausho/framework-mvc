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
    <h1 class="center">Consulta</h1>
        <table width='100%'>
            <thead>
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->datos as $row){ 
                include_once 'app/models/alumno.php';
                $alumno = new Alumno();
                $alumno = $row;
            ?>
            <tr>
            <td><?php echo $alumno->nombre; ?></td>
            <td><?php echo $alumno->apellido;?></td>
            <td><?php echo $alumno->nro_documento;?></td>
            <td><a href="<?php echo constant('BASE_URL'). 'consulta/verAlumno/'. $alumno->nro_documento; ?>">Editar</a></td>
            <td><a href="<?php echo constant('BASE_URL'). 'consulta/eliminarAlumno/'. $alumno->nro_documento; ?>">Eliminar</a></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>

    </div>
    <?php require 'app/views/footer.php';?>

    
</body>
</html>