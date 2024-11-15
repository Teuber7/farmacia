<?php

include_once("../componentes/header.php");

?>
    <main>
    <div>
            <h2>Nuestros productos</h2>
        </div>

        <section id="productos" class="productos">
      
          
        <?php
                include_once("../componentes/conf.php");

                $consulta = "SELECT * FROM productos";

                $resultado = mysqli_query($con,$consulta);

                if($resultado!=NULL){

                    while($filas = mysqli_fetch_array($resultado)){
                        echo "
                        <article>
                        <h3>$filas[nombreProducto]</h3>
                        <p><strong>Descripcion:</strong> $filas[descripcionProducto]</p>
                        <p><strong>Precio: $</strong> $filas[precioProducto]</p>
                        <figure> 
                        <img src=\"../imgs/$filas[fotoProducto]\" alt=\"$filas[nombreProducto]\" >
                        </figure>

                <div class=boton>
                    <a href=\"infoProducto.php?id=$filas[codigoProducto]\"> Ver más + </a> 
                </div>
                </article>  
                        ";
                    }

                }

            ?>


        </section>
        <section id="contacto" >
            <h2>Contacto</h2>
        
            <article>
                
                <form action="respuesta.php" method="post" >
                    <div>
                        <label for="nombre" >Nombre:</label>
                        <input id="nombre" type="text" name="nombre" placeholder="Nombre y apellido" >
                    </div>
                    <div>
                        <label for="correo" >Correo electrónico:</label>
                        <input id="correo" type="email" name="correo"  placeholder="mail@gmail.com" >
                    </div>
                    <div>
                        <label for="area" >Comentario:</label>
                        <textarea id="area" name="area" placeholder="Dejanos tu consulta o comentario" ></textarea>
                    </div>
                    <div>
                        <input type="submit" >
                    </div>

                </form>

            </article>

    </main>
    
</body>

<?php

include_once("../componentes/footer.php");

?>