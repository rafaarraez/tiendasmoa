<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $thumb = $_FILES['thumb']['tmp_name'];

    $arcchivo_subido = '../' . $products_config['carpeta_slider'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb, $arcchivo_subido);

    $statement = $conexion->prepare(
    'INSERT INTO sliders (slider_id, slider_thumb)
    VALUES (null, :thumb)'
    );

    $statement->execute(array(
        ':thumb' => $_FILES['thumb']['name']
    ));

    header('Location: ' . RUTA . '/admin/sliders.php');
}

require '../views/nuevo_slider.view.php';
