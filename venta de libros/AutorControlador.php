<?php
require_once("Clases/Autor.php");
require_once("Controladores/CarreraProfesionalControlador.php");

class AutorControlador{
    public function guardar(int $ts_id, int $student_id){
        $tsc = new CarreraProfesionalControlador();
        if($tsc->checkTSlibre($ts_id)){
            $Autor = new libro();
            $number = rand(1,100);
            $resultado = $lesson->guardar($number, $student_id, $ts_id);
            if($resultado!=0){
                return "Autor creada";
            }
        }else{
            return "libro ocupado";
        }
    }
}
