<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);


comprobarSesion();


if(!$conexion){
    header('Location: error.php');
}

$sliders = obtenerSliders($products_config['post_por_pagina'], $conexion);

require '../views/sliders.view.php';

?>