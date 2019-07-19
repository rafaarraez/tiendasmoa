<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}

$id = limpiarDatos($_GET['slider_id']);

if (!$id) {
    # code...
    header('Location: ' . RUTA . '/admin');
}

$statement = $conexion->prepare('DELETE FROM sliders WHERE slider_id = :id');
$statement->execute(array('id' => $id));

header('Location: ' . RUTA . '/admin');

?>