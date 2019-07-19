<?php


require 'admin/config.php';

require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    echo "No conectado";
}

$products = obtenerProductos(8, $conexion);
$sliders = obtenerSliders($products_config['post_por_pagina'], $conexion);

$aja = obtenerSliders($products_config['post_por_pagina'], $conexion);
$cont=0;
$contDos=0;

require 'views/index.view.php';

?>