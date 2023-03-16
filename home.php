<?php
session_start();
require ("./BD/conexion.php");

$consulta = $connection->prepare("SELECT*FROM usuarios");
$resultado = $consulta ->execute();
$resultado = $consulta ->fetchAll();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido</title>
    <link rel="stylesheet" type="text/css" href="../style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo/estilo.css">
</head>

<body>
<H1 style="text-align: left;">BIENVENIDO</H1>

    <div class="container">
        <div class="row">
            <div class="col-11">
                <header>
    <nav class="navbar">
        <div class="contenedor">

            <h3><a href="login.php">CERRAR SESION</a></h3>
        </div>
    </nav>
</header>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">primer nombre</th>
                        <th scope="col">segundo nombre</th>
                        <th scope="col">primer apellido</th>
                        <th scope="col">segundo apellido</th>
                        <th scope="col">telefono</th>
                        <th scope="col">correo</th>
                        <th scope="col">direccion</th>
                        <th scope="col">edad</th>
                        <th scope="col">genero</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    


                    foreach ($resultado as $key => $Fila) {
                        
                    
                    ?>
                        <tr>
                            <th scope="row"><?php echo $Fila['id']?></th>
                            <td><?php echo $Fila['primer_nombre']?></td>
                            <td><?php echo $Fila['segundo_nombre']?></td>
                            <td><?php echo $Fila['primer_apellido']?></td>
                            <td><?php echo $Fila['segundo_apellido']?></td>
                            <td><?php echo $Fila['telefono']?></td>
                            <td><?php echo $Fila['correo']?></td>
                            <td><?php echo $Fila['direccion']?></td>
                            <td><?php echo $Fila['edad']?></td>
                            <td><?php echo $Fila['genero']?>
                            <button class="btn btn-warnig"> <a href="./eliminar.php?id=<?php echo $Fila['id'];?>">eliminar</a></button>
                            <button class="btn btn-warnig"> <a href="./editar.php?id=<?php echo $Fila['id'];?>">editar</a></button>
                            <!-- < echo "<button class='elimina'><a href='../eliminar.php?id=".$Fila['id'].">Eliminar cuenta</a></button>";?> -->
                            <!-- <a href="./eliminar.php?id=$id< echo $Fila['id']?>"; class="btn btn-warning">eliminar</a> -->
                            </td>
                            </td>

                        </tr>

                </tbody>
            <?php } ?>
            </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>