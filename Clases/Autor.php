<?php
require_once "Conn.php";

class Autor{
    private $id;
    private $nombre;
    private $Apellidos;
    private $Articulos;
    private $tOMOS;

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getName(){
        return $this->$nombre;
    }

    public function setName(int $number){
        $this->number = $nombre;
    }

    public function getApellidos(){
        return $this->$Apellidos;
    }

    public function setArticulos(String $Articulos){
        $this->status = $Articulos;
    }

    public function getArticulos(){
        return $this->$Articulos;
    }

    public function setIdStudent(String $id_student){
        $this->id_student = $id_student;
    }

    public function guardar(int $number, int $student_id, int $timeslot_id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "INSERT INTO Autor(id,nombre,Apelidos,Articulos,Tomos) VALUES ('$nombre', '$id', '$Apellidos', '$Articulos','$Tomos')";
        $resultado = $conexion->exec($sql2);
        $conn->cerrar();
    
        return $resultado;
    }
}