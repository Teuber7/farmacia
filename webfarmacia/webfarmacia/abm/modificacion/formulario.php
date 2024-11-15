<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Formulario ABM</title>
</head>
<body>
    <header>
        <div>
            <h1>Formulario de ABM</h1>
        </div>
       

    </header>
    <main>
        <section class="seccion" >
            <h2>Agregar</h2>
           
            <?php 
            include_once("../../componentes/conf.php");

                $action = "../alta/alta.php";
                $nombre = "";
                $codigo = "";
                $desc = "";
                $cantidad = "";
                $precio = "";
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $action = "../modificacion/modificacion.php";
                    $consulta = "SELECT * FROM productos WHERE codigoProducto=$id";
    

                    $resultado = mysqli_query($con,$consulta);
                    if($resultado!=NULL){

                        while($filas = mysqli_fetch_array($resultado)){
                            $nombre=$filas["nombreProducto"];
                            $codigo=$filas["codigoProducto"];
                            $desc=$filas["descripcionProducto"];
                            $cantidad=$filas["cantidadProducto"];
                            $precio=$filas["precioProducto"];
                        }
                    }
                }

                echo "
                <form class=\"formulario-abm\" action=\"$action\" method=\"post\" enctype=\"multipart/form-data\" >
            
                <div>
                    <label for=\"nombre\" >Nombre</label>
                    <input id=\"nombre\" type=\"text\" name=\"nombre\" value=\"$nombre\">
                </div>
                    <input type=hidden id=\"codigo\" name=\"codigo\" value=\"$codigo\">
            
                <div>
                    <label for=\"precio\" >Precio</label>
                    <input id=\"precio\" type=\"number\" name=\"precio\" value=\"$precio\" >
                </div>
                <div>
                    <label for=\"cantidad\" >Cantidad</label>
                    <input id=\"cantidad\" type=\"number\" name=\"cantidad\" value=\"$cantidad\" >
                </div>

                <div>
                    <label for=\"foto\" >Foto</label>
                    <input id=\"foto\" type=\"file\" name=\"foto\"  >
                <div>
                    <label for=\"desc\" >Descripcion</label>
                    <textarea id=\"desc\" name=\"desc\">$desc</textarea>
                </div>
                ";
                ?>
                <div>
                    <input type="submit" >
                </div>

            </form>
            
        </section>
        
    
</body>
</html>