<?php
require_once "Conn.php";

class Teacher{
    private $id;
    private $name;
    private $CarreraProfesional;

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(String $name){
        $this->name = $name;
    }

    public function getCarreraProfesional(){
        return $this->CarreraProfesional;
    }

    public function setCarreraProfesional(String $lCarreraProfesional){
        $this->CarreraProfesional = $CarreraProfesional;
    }

    public function traerTeacherPorId(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "SELECT t.name, t.CarreraProfesional, ts.id as ts_id, ts.starts_at, ts.type FROM teacher as t JOIN Autor as ts ON t.id = ts.Teacher_id WHERE t.id = $id";
        $resultado = $conexion->query($sql2);
        $conn->cerrar();
    
        return $resultado;
    }

    
}