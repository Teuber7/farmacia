<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link rel="icon" type="image/png" href="../imgs/logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap">

    <title>Farmacia Colon</title>
</head>
<body>
    
<header>
<div id="logo">
</div>

        <?php
        $menu = array(
            "Home"=>"../index.php",
            "Productos"=>"inicio.php#productos",
            "Contacto"=>"inicio.php#contacto"
        );   
    ?>
<nav class="navbar">
   
        <ul class="navbar-list">
            <?php 
                foreach ($menu as $paginas => $link) {
                    echo '<li"><a class="nav-link" href="' . $link . '">' . $paginas . '</a></li>';
                }
            ?>       
        </ul>
    </div>
</nav>

    </header>