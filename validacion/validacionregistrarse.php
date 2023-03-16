<?php
    require("../BD/conexion.php");


    if(strlen($_POST["numero_documento"])==0){
        echo'<script language="javascript">alert("Ingresa correctamente el campo cedula");</script> <br>';
    }else{
        if(preg_match('/^[0-9]+$/',$_POST["numero_documento"])==1){
        $numero_documento = htmlentities($_POST["numero_documento"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo cedula");</script> <br>';
        header("Location: ../Registrarse.php");
    }  
    }
    
    if(strlen($_POST["primer_nombre"])==0){
        echo("Campo de nombre vacio <br>");
    }else{
        if(preg_match('/^[a-zñÑ A-Z]+$/',$_POST["primer_nombre"])==1){
        $primer_nombre = htmlentities($_POST["primer_nombre"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo primer nombre");</script> <br>';
        header("Location: ../Registrarse.php");

    }
    }

    if(strlen($_POST["segundo_nombre"])==0){
        echo("Campo de nombre vacio <br>");
    }else{
    if(preg_match('/^[a-zñÑ A-Z]+$/',$_POST["segundo_nombre"])==1){
        $segundo_nombre = htmlentities($_POST["segundo_nombre"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo segundo nombre");</script> <br>';   
        header("Location: ../Registrarse.php");

    }
    }
    

    if(strlen($_POST["primer_apellido"])==0){
        echo("Campo de nombre vacio <br>");
    }else{
    if(preg_match('/^[a-zñÑ A-Z]+$/',$_POST["primer_apellido"])==1){
        $primer_apellido = htmlentities($_POST["primer_apellido"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo primer apellido");</script> <br>';
        header("Location: ../Registrarse.php");

        }
    }

    if(preg_match('/^[a-zñÑ A-Z]+$/',$_POST["segundo_apellido"])==1){
        $segundo_apellido = htmlentities($_POST["segundo_apellido"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo segundo apellido");</script> <br>';
        header("Location: ../Registrarse.php");

        }


    if(preg_match('/^[0-9]+$/',$_POST["telefono"])==1){
        $telefono = htmlentities($_POST["telefono"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo telefono");</script> <br>';
        header("Location: ../Registrarse.php");

        }
    

    if(preg_match("/@/",$_POST["correo"])==1){
        $correo = htmlentities($_POST["correo"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo correo");</script> <br>';
        header("Location: ../Registrarse.php");

        }


    if(strlen($_POST["direccion"])==0){
        echo("Campo de direccion vacio <br>");
    }else{
        if(preg_match('/^[a-zA-Z0-9\s\,\.\-\#]+$/',$_POST["direccion"])==1){
        $direccion = htmlentities($_POST["direccion"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo direcccion");</script> <br>';
        header("Location: ../Registrarse.php");

        }
    }

    if(strlen($_POST["edad"])==1){
        echo("Campo de edad vacio <br>");
    }else{
    if(preg_match('/^[0-9]+$/',$_POST["edad"])==1){
        $edad = htmlentities($_POST["edad"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo edad");</script> <br>';
        header("Location: ../Registrarse.php");
    }
}

    if(strlen($_POST["genero"])==0){
        echo("Campo de genero vacio <br>");
    }else{
        if(isset($_POST["genero"])=="M" OR "F" OR "m" OR "f"){
        $genero= htmlentities($_POST["genero"]);
    }else{echo'<script language="javascript">alert("Ingresa correctamente el campo genero");</script> <br>';
        header("Location: ../Registrarse.php");
    }
    }
        
    $consulta = $connection->prepare("INSERT INTO usuarios(numero_documento,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,telefono,correo,direccion,edad,genero) VALUES (:numero_documento, :primer_nombre, :segundo_nombre, :primer_apellido, :segundo_apellido, :telefono, :correo, :direccion, :edad, :genero)");
    $consulta->bindParam(':numero_documento',$numero_documento);
    $consulta->bindParam(':primer_nombre',$primer_nombre);
    $consulta->bindParam(':segundo_nombre',$segundo_nombre);
    $consulta->bindParam(':primer_apellido',$primer_apellido);
    $consulta->bindParam(':segundo_apellido',$segundo_apellido);
    $consulta->bindParam(':telefono',$telefono);
    $consulta->bindParam(':correo',$correo);
    $consulta->bindParam(':direccion',$direccion);
    $consulta->bindParam(':edad',$edad);
    $consulta->bindParam(':genero',$genero);
    $consulta->execute();

    if($consulta == 1){    
        header("Location: ../felicidades.php");
    }else{
        echo('No se agrego correctamente');
    }