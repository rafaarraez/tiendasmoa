<?php


require 'admin/config.php';

require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    echo "No conectado";
}


if(isset($_GET['producto_cat'])){
    $cat = limpiarDatos($_GET['producto_cat']);
    $products = obtenerProductosPorCat($products_config['post_por_pagina'], $conexion, $cat);
}else{
    $products = obtenerProductos($products_config['post_por_pagina'], $conexion);
}


require 'views/productos.view.php';

?>