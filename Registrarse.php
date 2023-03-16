<?php 

require("./BD/conexion.php");

?>

<!doctype html>
<html lang="es">
<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo/estilo.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-7">
            <section>
        <div class="form-box">
            <div class="form-value">
                <form action="./validacion/validacionregistrarse.php" method="post">
                        <h1>Registro</h1>
                        <h3>importante! si no te resgistras bien la pagina se reiniciara, llenar con campos validos</h3>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="numero_documento" name="numero_documento" placeholder="Documento" aria-describedby="basic-addon1">
                        <label for="numero_documento"></label>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="primer_nombre" name="primer_nombre" placeholder="Primer nombre" aria-describedby="basic-addon1">
                        <label for="primer_nombre"></label>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="segundo_nombre" name="segundo_nombre" placeholder="Segundo nombre" aria-describedby="basic-addon1">
                        <label for="segundo_nombre"></label>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="primer_apellido" name="primer_apellido" placeholder="Primer apellido" aria-describedby="basic-addon1">
                        <label for="primer_apellido"></label>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="segundo_apellido" name="segundo_apellido" placeholder="Segundo apellido" aria-describedby="basic-addon1">
                        <label for="segundo_apellido"></label>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="telefono" name="telefono" placeholder="Telefono" aria-describedby="basic-addon1">
                        <label for="telefono"></label>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="correo" name="correo" placeholder="Corre" aria-describedby="basic-addon1">
                        <label for="correo"></label>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="direccion" name="direccion" placeholder="Direccion" aria-describedby="basic-addon1">
                        <label for="direccion"></label>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="edad" name="edad" placeholder="Edad" aria-describedby="basic-addon1">
                        <label for="edad"></label>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" required id="genero" name="genero" placeholder="genero ingrese (M) (F)" aria-describedby="basic-addon1">
                        <label for="genero"></label>
                    </div>

                    <button class="boton" type="submit">Registrarse</button>
            
                </form>
                <form action="./login.php">
                <button class="boton" type="submit">Administrador</button>
                </form>
            </div>
        </div>
    </section>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>