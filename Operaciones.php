<?php

require('Conexion.php');

class Operaciones{
    
    function Operaciones(){
        
    }
    
    function insertarIp($ip){
        $query = "CALL INS_IP('" . $ip . "')";
        $conn = new Conexion("localhost", "jorgesil_DNS", "jorgesil_DNS", "Jorges01");
        return $conn->ejecutar($query);
    }
    
    function leerUltimaIp(){
        $query = "CALL SEL_LASTIP()";
        $conn = new Conexion("localhost", "jorgesil_DNS", "jorgesil_DNS", "Jorges01");
        $res = $conn->ejecutarQuery($query);
        
    }
}
