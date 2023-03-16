<?php
        require "../BD/conexion.php";

        if(isset($_POST["inicio"])){
            $nombre=$_POST["nombre"];
            $password=(htmlentities($_POST["password"]));
            $consultar=$connection->prepare('SELECT * FROM administrador WHERE nombre=:nombre');
            $consultar->bindParam(':nombre',$nombre);
            $consultar->execute();

            $verificar=$consultar->fetch(PDO::FETCH_ASSOC);

            if($nombre==$verificar['nombre'] and $password==$verificar['password']){
                session_start();
                $_SESSION['nombre']=$verificar['nombre'];
                $_SESSION['id']=$verificar['id'];
                header("Location:../home.php");
            }else{
                echo'dato incorrecto';
            }
        }