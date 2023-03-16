<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="../style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo/estilo.css">    
</head>
<body>


<div class="container">
    <form action="./validacion/validacionLogin.php" method="post" enctype="multipart/form-data">
        <center>
    <h1 class="animate__animated animate__backInLeft">Sistema de login</h1>

    </center>
    <div class="mb-3">
    <label for="admin" class="form-label">Usuario</label>  
        <input type="text" class="form-control" placeholder="ingrese su nombre" name="nombre">
    </div>
    <div class="mb-3">
    <label for="admin" class="form-label"></label>  
        <input type="text" class="form-control" placeholder="inicio" name="inicio" hidden>
    </div>

    <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label> 
        <input type="password" class="form-control" placeholder="ingrese su contraseña" name="password">
    </div>

        <center>
    <button type="submit"  value="Ingresar">Ingresar</button>
    </center>


    
</form>
<button><a href="./Registrarse.php">Registrarse</a></button>



</body>
</html>