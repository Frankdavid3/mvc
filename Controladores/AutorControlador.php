<?php
require_once("Clases/Autor.php");
require_once("Controladores/CarreraProfesionalControlador.php");

class AutorControlador{
    public function guardar(int $ts_id, int $student_id){
        $tsc = new CarreraProfesionalControlador();
        if($tsc->checkTSlibre($ts_id)){
            $lesson = new CarreraProfesional();
            $number = rand(1,100);
            $resultado = $Autor->guardar($nombre, $student_id, $ts_id);
            if($resultado!=0){
                return "Autor creada";
            }
        }else{
            return "CarreraProfesional ocupado";
        }
    }
}
