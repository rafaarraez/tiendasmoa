<?php


require 'admin/config.php';

require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    echo "No conectado";
}


require 'views/ubicanos.view.php';

?>