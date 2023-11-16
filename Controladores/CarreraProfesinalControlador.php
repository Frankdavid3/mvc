<?php
require_once("Clases/CarreraProfesional.php");

class CarreraProfesionalControlador{
    public function eliminarConPOO(int $id){
        $timeslot = new CarreraProfesional();
        $timeslot->setId($id);
        $resultado = $CarreraProfesional->eliminar1();
        if($resultado!=0){
            return "CarreraProfesional eliminado";
        }
    }

    public function eliminarSinPOO(int $id){
        $timeslot = new CarreraProfesional();
        $resultado = $libro->eliminar2($id);
        if($resultado!=0){
            return "libro eliminado";
        }
    }

    public function checkTSlibre($id){
        $CarreraProfesional = new libro();
        $resultado = $CarreraProfesional->checklibroEsLibre($id);
        
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