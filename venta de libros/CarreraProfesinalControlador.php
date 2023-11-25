<?php
require_once("Clases/CarreraProfesional.php");

class CarreraProfesionalControlador{
    public function eliminarConPOO(int $id){
        $CarreraProfesional = new Autor();
        $CarreraProfesional->setId($id);
        $resultado = $CarreraProfesional>eliminar1();
        if($resultado!=0){
            return "CarreraProfesional eliminado";
        }
    }

    public function eliminarSinPOO(int $id){
        $CarreraProfesional = new Autor();
        $resultado = $CarreraProfesional->eliminar2($id);
        if($resultado!=0){
            return "CarreraProfesional eliminado";
        }
    }

    public function checkTSlibre($id){
        $CarreraProfesional = new Autor();
        $resultado = $CarreraProfesional->checkTimeSlotEsLibre($id);
        
        $respuesta = true;
        $indice = 0;
        foreach($resultado as $ts){
             $indice++;
        }
        if($indice!=0){
            $respuesta = false;
        }
        return $respuesta;
    }
}