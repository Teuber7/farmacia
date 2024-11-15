<?php
include_once("../../componentes/conf.php");

$nombre;
$codigo;
$desc;
$foto;
$cantidad;
$precio;

if(isset($_POST['codigo'])){
    $codigo = $_POST['codigo'];
    $desc = $_POST['desc'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $temporal = $_FILES['foto']['tmp_name'];
    $foto = time(). ".png";

    move_uploaded_file($temporal,"../../imgs/$foto");


    $consulta = "UPDATE productos SET  nombreProducto='$nombre', precioProducto= $precio, cantidadProducto = $cantidad, fotoProducto = '$foto', descripcionProducto ='$desc' WHERE codigoProducto = $codigo";

    mysqli_query($con,$consulta);

    header("Location: ../index.php"); 

}

