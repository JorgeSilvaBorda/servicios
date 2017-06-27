<?php
class Conexion{
    private $servidor;
    private $baseDatos;
    private $usuario;
    private $pass;
    private $enlace;
    
    function Conexion($servidor, $baseDatos, $usuario, $pass){
        $this->servidor = $servidor;
        $this->baseDatos = $baseDatos;
        $this->usuario = $usuario;
        $this->pass = $pass;
        $this->enlace = new mysqli($this->servidor, $this->baseDatos, $this->usuario, $this->pass);
    }
    
    function ejecutarQuery($query){
        $salida = new stdClass();
        if($enlace->connect_errno){
            $salida->estado = "Error";
            $salida->error = $enlace->conect_error;
            return $salida;
        }else{
            $salida->resultado = $enlace->query($query);
            $salida->estado = "ok";
            return $salida;
        }
    }
    
    function ejecutar($query){
        $salida = new stdClass();
        if($enlace->connect_errno){
            $salida->estado = "Error";
            $salida->error = $enlace->connect_error;
        }else{
            if($enlace->query($query) === TRUE){
                $salidas->estado = "ok";
            }else{
                $salidas->estado = "Error";
                $salidas->error = $enlace->error;
            }
        }
        return $salidas;
    }
}

