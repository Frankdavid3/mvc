<?php
require_once "Conn.php";

class Teacher{
    private $id;
    private $name;
    private $language;

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

    public function getLEspecialidad(){
        return $this->Especialidad;
    }

    public function setEspecialidad(String $Especialidad){
        $this->language = $Especialidad;
    }

    public function traerTeacherPorId(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "SELECT t.name, t.Especialidad, ts.id as ts_id, ts.starts_at, ts.type FROM teacher as t JOIN timeslot as ts ON t.id = ts.Teacher_id WHERE t.id = $id";
        $resultado = $conexion->query($sql2);
        $conn->cerrar();
    
        return $resultado;
    }

    
}