<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiendas MOA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo RUTA;?>/assets/css/style.css">

</head>

<body>


    <nav id="navHome" class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid max-width-940">
            <a class="navbar-brand" href="<?php echo RUTA;?>/index.php">
                <img src="<?php echo RUTA; ?>/src/logo/logo.svg" width="250" height="100" alt="">
            </a>
            <button class="navbar-toggler togglerNoBorder" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse backgroundWhite" id="navbarNavDropdown">

                <ul class="navbar-nav ml-auto navbar-center" id="aja">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo RUTA;?>/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo RUTA;?>/nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo RUTA;?>/productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo RUTA;?>/ubicanos.php">Nuestras Tiendas</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item-rrss">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center padding-lados">
                            <h6 class="redes">SIguenos en <br> nuestras redes</h6>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


   