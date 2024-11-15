<?php

include_once("../../componentes/conf.php");

$nombre;
$codigo;
$desc;
$foto;
$cantidad;
$precio;


if(isset($_POST['nombre'])){
    $desc = $_POST['desc'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $temporal = $_FILES['foto']['tmp_name'];
    $foto = time(). ".png";

    move_uploaded_file($temporal,"../../imgs/$foto");


    $consulta = "INSERT INTO productos (`nombreProducto`, `precioProducto`, `cantidadProducto`, `fotoProducto`, `descripcionProducto`) VALUES ('$nombre', $precio, $cantidad, '$foto','$desc')";

    echo $consulta;
    mysqli_query($con,$consulta);

    header("Location: ../index.php"); 

   
}

