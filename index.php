<?php

//Recibir parámetros para poder actuar:

$tipo = $_POST["tipo"];

require('Operaciones.php');
if ($tipo == 'insertar-ip') {
    if (!isset($_POST["new-ip"])) {
        die("No se ha pasado el parámetro correcto.");
    } else {
        $oper = new Operaciones();
        echo $oper->insertarIp($ip);
    }
} else if ($tipo == 'leer-ip') {
    $oper = new Operaciones();
    echo $oper->leerUltimaIp();
}