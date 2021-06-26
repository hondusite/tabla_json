<?php
require 'conexion.php';
//convierte el json a array
$productos=json_decode($_POST['json'],true);
//recorrer el arreglo
foreach ($productos as $producto){
     $nombre=$producto['nombre'];
     $cantidad=$producto['cantidad'];
     $precio=$producto['precio'];
     $total=$producto['total'];
     $guardar=mysqli_query($con,"INSERT INTO detalle_factura (nombre, cantidad, precio, total) VALUES ('$nombre', '$cantidad', '$precio', '$total')");
}