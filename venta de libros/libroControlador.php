<?php
require_once("Clases/Teacher.php");
require_once("Controladores/CarreraProfesionalControlador.php");

class TeacherControlador{
    public function getTeacherPorId(int $id){
        $teacher = new Teacher();
        $resultado = $teacher->traerTeacherPorId($id);
        $tsc = new libroControlador();
        
        $respuesta = array();
        $i = 0;
        
        foreach($resultado as $teacher){
            if($tsc->checkTSlibre($teacher["ts_id"])){
                $respuesta[$i]["name"] = $teacher["name"];
                $respuesta[$i]["libro"] = $teacher["CarreraProfesional"];
                $respuesta[$i]["starts_at"] = $teacher["starts_at"];
                $respuesta[$i]["type"] = $teacher["type"];
            }
            $i++;
        }

        return $respuesta;
    }
}