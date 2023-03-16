<?php
$Localhost = 'localhost';
$Usuario_BD = 'root';
$Password_BD = '';
$Nombre_BD = 'prueba_tecnica';

try{
  $connection = new PDO("mysql:host={$Localhost};dbname={$Nombre_BD};charset=UTF8",$Usuario_BD,$Password_BD);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
  echo $e->getMessage();
}

