<?php
require_once "Clases/Usuario.php";

class UsuarioControlador{
    public function guardar(String $usuario2, String $contraseña, String $contraseña2, String $nombres, String $apellidos): String{
        $respuesta="";
        if(trim($usuario2)==""){
            $respuesta.="Complete el campo Usuario<br>";
        }
        if(trim($contraseña)==""){
            $respuesta.="Complete el campo Contraseña<br>";
        } 
        if(trim($contraseña2)==""){
            $respuesta.="Complete el campo Contraseña2<br>";
        } 
        if(trim($nombres)==""){
            $respuesta.="Complete el campo Nombres<br>";
        }  
        if(trim($apellidos)==""){
            $respuesta.="Complete el campo Apellidos<br>";
        }              
        if(strlen($contraseña)>0 && strlen($contraseña)<8){
            $respuesta.="La contraseña debe tener al menos 8 caracteres<br>";
        }
        if(strlen($contraseña2)>0 && strlen($contraseña2)<8){
            $respuesta.="La contraseña2 debe tener al menos 8 caracteres<br>";
        }
        if($contraseña !== $contraseña2){
            $respuesta.="La contraseña2 no coincide<br>";
        }
        $patronContraseña = '#^[A-Z][a-z]+[.]$#';
        if(preg_match($patronContraseña, $contraseña)!=1){
            $respuesta.="La contraseña no cumple con limitaciones<br>";
        }
            
        $usuario = new Usuario();
        
        if($usuario->guardar($usuario2, $contraseña, $nombres, $apellidos)>0){
            $respuesta = "Usuario registrado";
        } 
        return $respuesta;
    }
}