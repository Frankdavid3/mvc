<?php
require_once "Conn.php";

class Usuario{
    public $id;
    public $contraseña;
    public $nombres;
    public $apellidos;
    public $dni;
    public $CarreraProfesional;
    

    public function guardar(String $id, String $contraseña, String $nombres, String $apellidos,String $dni,String $CarreraProfesional){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "INSERT INTO Usuario($id, $contraseña, $nombres, $apellidos,$dni,$CarreraProfesional) VALUES ('$id', '$contraseña', '$nombres', '$apellidos','$dni','$CarreraProfesional')";
        $resultado = $conexion->exec($sql2);
        $conn->cerrar();
    
        return $resultado;
    }
}