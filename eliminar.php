<?php
    require("./BD/conexion.php");

    $codigo = $_GET["id"];

    $consulta = $connection->prepare("DELETE FROM usuarios WHERE id=?");
    $resultado = $consulta->execute([$codigo]);

    if ($resultado) {
        echo "<script languaje='JavaScript'>
            alert('Los datos fueron eliminados exitosamente');
            location.assign('./home.php');</script>";
    } else {
        echo "<script languaje='JavaScript'>
            alert('Los datos fueron NO se eliminaron');
            location.assign('./home.php');</script>";
    }