<?php

function conexion($bd_config){
    try {
        //code...
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basededatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    }
    catch(PDOException $e) {
        echo "Mensaje: " . $e->getMessage() . " ";
    }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtenerProductos($products_config, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $products_config - $products_config : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM productos ORDER BY producto_id DESC LIMIT $inicio, $products_config");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtenerSliders($products_config, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $products_config - $products_config : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM sliders ORDER BY slider_id DESC LIMIT $inicio, $products_config");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtenerProductosPorCat($products_config, $conexion, $cat){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $products_config - $products_config : 0;
    $sentencia = $conexion->prepare("SELECT * FROM productos WHERE producto_cat = '$cat' LIMIT $inicio, $products_config");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function id_articulo($id){
    return (int)limpiarDatos($id);
}

function obtener_post_por_id($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM productos WHERE producto_id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fecha($fecha){
    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp) - 1;
    $year = date('Y', $timestamp);

    $fecha = "$dia de " . $meses[$mes] . " del $year";
    return $fecha;

}

function numero_paginas($post_por_pagina, $conexion){
    $total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    $numero_paginas = ceil($total_post / $post_por_pagina);
    return $numero_paginas;
}

function comprobarSesion(){
    if(!isset($_SESSION['admin'])){
        header('Location: ' . RUTA . '/login.php');
    }
}

?>