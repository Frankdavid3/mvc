<?php
require_once "Conn.php";

class Lesson{
    private $id;
    private $number;
    private $status;
    private $id_student;
    private $id_Autor;

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getNumber(){
        return $this->number;
    }

    public function setName(int $number){
        $this->number = $number;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus(String $status){
        $this->status = $status;
    }

    public function getIdStudent(){
        return $this->id_student;
    }

    public function setIdStudent(String $id_student){
        $this->id_student = $id_student;
    }

    public function guardar(int $number, int $student_id, int $CarreraProfesional_id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "INSERT INTO VENTA DE LIBROS (number, status, Student_id, CarreraProfesional_id) VALUES ($number, 'scheduled', $student_id, $CarreraProfesional_id)";
        $resultado = $conexion->exec($sql2);
        $conn->cerrar();
    
        return $resultado;
    }
}