<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>validar</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    
</body>
</html>
<?php
    require('../BD/uso.php');
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD


    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $primer_nombre = $_POST['primer_nombre'];
        $segundo_nombre = $_POST['segundo_nombre'];
        $primer_apellido = $_POST['primer_apellido'];
        $segundo_apellido = $_POST['segundo_apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $edad = $_POST['edad'];
        $genero = $_POST['genero'];

        $query = $connection->prepare("UPDATE usuarios SET primer_nombre=?, segundo_nombre=?, primer_apellido=?, segundo_apellido=?, telefono=?, correo=?, direccion=?, edad=?, genero=? WHERE id=?");
        $guardar = $query->execute([$primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $direccion, $edad, $genero, $id]);

        if ($guardar) {
            echo "<h2> Formulario modificado <h2>";
            echo "<a href='../home.php'>Regresar</a>";
        } else {
            echo "<h2> Error al modificar el formulario <h2>";
            echo "<a href='../editar.php'>Regresar</a>";

        }
    }