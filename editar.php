<?php
session_start();
include './BD/uso.php';

    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $id = $_GET["id"];

    $consulta = $connection->prepare("SELECT * FROM usuarios WHERE id=:id");// Traduzco mi petición
    $consulta->execute(['id' => $id]); //Ejecuto mi petición

    $producto = $consulta->fetch(PDO::FETCH_ASSOC); 

?>
<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="./estilo/estilo.css">
</head>

<body>
<div class="container">
    <br>
    <center>
        <h1>Modificar Usuario</h1>
    </center>

    
    <form action="./validacion/validarEditar.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="primer_nombre" class="form-label"></label>
        <input type="text" class="form-control" id="id" name="id" placeholder="id" value="<?php echo $producto['id']?>" hidden>
    </div>

    <div class="mb-3">
<label for="primer_nombre" class="form-label"></label>
<input type="text" class="form-control" id="primer_nombre" name="primer_nombre" placeholder="primer nombre" value="<?php echo $producto['primer_nombre']?>">
</div>

<div class="mb-3">
<label for="segundo_nombre" class="form-label"></label>
<input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" value="<?php echo $producto['segundo_nombre']?>">
</div>

<div class="mb-3">
<label for="primer_apellido" class="form-label"></label>
<input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="<?php echo $producto['primer_apellido']?>">
</div>

<div class="mb-3">
<label for="segundo_apellido" class="form-label"></label>
<input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="<?php echo $producto['segundo_apellido']?>">
</div>

<div class="mb-3">
<label for="telefono" class="form-label"></label>
<input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $producto['telefono']?>">
</div>

<div class="mb-3">
<label for="correo" class="form-label"></label>
<input type="text" class="form-control" id="correo" name="correo" value="<?php echo $producto['correo']?>">
</div>

<div class="mb-3">
<label for="direccion" class="form-label"></label>
<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $producto['direccion']?>">
</div>

<div class="mb-3">
<label for="edad" class="form-label"></label>
<input type="text" class="form-control" id="edad" name="edad" value="<?php echo $producto['edad']?>">
</div>

<div class="mb-3">
<label for="genero" class="form-label"></label>
<input type="text" class="form-control" id="genero" name="genero" value="<?php echo $producto['genero']?>">
</div>

<button type="submit">Actualizar</button>  

</form>


<form action="./home.php">
<button type="submit">Regresar</button>

</form>
</div>
</body>

</html>