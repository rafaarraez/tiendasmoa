<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $categoria = $_POST['categoria'];
    $nombre = limpiarDatos($_POST['nombre']);
    $sku = limpiarDatos($_POST['sku']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb']['tmp_name'];

    $arcchivo_subido = '../' . $products_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb, $arcchivo_subido);

    $statement = $conexion->prepare(
    'INSERT INTO productos (producto_id, producto_cat, producto_nombre, producto_sku, producto_descripcion, producto_thumb)
    VALUES (null, :category, :nombre, :sku, :texto, :thumb)'
    );

    $statement->execute(array(
        ':category' => $categoria,
        ':nombre' => $nombre,
        ':sku' => $sku,
        ':texto' => $texto,
        ':thumb' => $_FILES['thumb']['name']
    ));

    header('Location: ' . RUTA . '/admin');
}

require '../views/nuevo.view.php';
