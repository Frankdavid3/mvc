<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" name="usuario" placeholder="Ingrese nombre de usuario"/><br>
    <input type="password" name="contraseña" placeholder="Ingrese contraseña"/><br>
    <input type="password" name="contraseña2" placeholder="Repita la contraseña"/><br>
    <input type="text" name="nombres" placeholder="Ingrese nombres"/><br>
    <input type="text" name="apellidos" placeholder="Ingrese apellidos"/><br>
    <input type="submit" value="Guardar"/><br>
</form>
<?php
    if(!empty($_POST)){
        $usuario = $_POST["usuario"]; 
        $contraseña = $_POST["contraseña"];
        $contraseña2 = $_POST["contraseña2"];        
        $apellidos = $_POST["apellidos"];    
        $nombres = $_POST["nombres"];
        
        require_once "Controladores/UsuarioControlador.php";
        $uc = new UsuarioControlador();
        echo $uc->guardar($usuario, $contraseña, $contraseña2, $nombres, $apellidos,$CarreraProfesional);
    }