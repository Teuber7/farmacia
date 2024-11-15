<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" >

    <title>ABM Farmacia Colon</title>
</head>


<header>
    <div id="logo">
    <h1 id="abm">ABM Farmacia Colon</h1>
    </div>
   
</header>
<body>

    <main>

    <a class="boton-agregar" href="modificacion/formulario.php">Agregar producto</a>
        <table class="tabla-abm">
            <caption>Productos</caption>
            <thead>
            <tr>
                <th>Codigo producto</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Imagen</th>
                <th>Descripcion</th>
                <th>Modificar</th>
                <th>Eliminar</th>   
            </tr>
           <tbody>
           <?php
                include_once("../componentes/conf.php");
                if(isset($_GET['id'])){
                    $idProducto = $_GET['id'];
                    $borrarConsulta = "DELETE FROM productos WHERE codigoProducto = $idProducto";
                    mysqli_query($con,$borrarConsulta);

                    header("Location: index.php"); 
                }

                $consulta = "SELECT * FROM productos";

                $resultado = mysqli_query($con,$consulta);

                if($resultado!=NULL){

                    while($filas = mysqli_fetch_array($resultado)){
                        echo "
                        <tr>
                        <th>$filas[codigoProducto]</th>
                        <th>$filas[nombreProducto]</th>
                        <th>$filas[precioProducto]</th>
                        <th>$filas[cantidadProducto]</th>
                        <th><img width=\"50\" src=\"../imgs/$filas[fotoProducto]\"/></th>
                        <th>$filas[descripcionProducto]</th>
                        <th><a href=\"modificacion/formulario.php?id=$filas[codigoProducto]\">✏️</a></th>
                        <th><a href=\"index.php?id=$filas[codigoProducto]\">🗑️</a></th>
                    </tr>
                        ";
                    }

                }

            ?>
        
           </tbody>
        </thead>
     </table>

    </main>
    
</body>
</html>