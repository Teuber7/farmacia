<?php
include_once("../componentes/header.php");

$nombre;
$correo;
$area;

if(isset($_GET["nombre"])){

    $nombre = $_GET["nombre"];

}
if(isset($_GET["correo"])){

    $correo = $_GET["correo"];

}

if (isset($_GET["area"])) {

    $area = $_GET["area"];
}

echo "
        <main class=\"respuesta\">
            <p>Muchas gracias por contactarte con Farmacia Colon</p>
            
            <h2>$nombre</h2>

            <p>$correo</p>

            <p>$area</p>

        </main>


";



include_once("../componentes/footer.php");




?>