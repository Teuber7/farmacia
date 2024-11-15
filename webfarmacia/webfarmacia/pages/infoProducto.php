<?php
include_once("../componentes/header.php");
               
               if(isset($_GET["id"])){
                $id = $_GET["id"];
                include_once("../componentes/conf.php");

                $consulta = "SELECT * FROM productos WHERE codigoProducto = $id";

                $resultado = mysqli_query($con,$consulta);

                if($resultado!=NULL){

                    while($filas = mysqli_fetch_array($resultado)){
                        echo "
                        <article class=\"ficha\">
                        <h3>$filas[nombreProducto]</h3>
                        <p>Descripcion: $filas[descripcionProducto]</p>
                        <p>Precio: $ $filas[precioProducto]</p>
                        <figure> 
                        <img src=../imgs/$filas[fotoProducto] alt=\"$filas[nombreProducto]\">
                        </figure>

                        <div class=boton>
                        <a href=\"inicio.php\"> ↩ Volver</a> 
                    </div>
                </article>  
                        ";
                    }

                }
               } 

            ?>
</body>
</html>
<?php
include_once("../componentes/footer.php");