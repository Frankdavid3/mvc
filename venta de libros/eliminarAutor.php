<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id" placeholder="Ingrese id de CarreraProfesional><br>
    <input type="submit" value="Eliminar"><br>
</form>
<?php
if(!empty($_POST)){
    $id = $_POST['id'];
    include_once "Controladores/CarreraProfesionalControlador.php";
    $tsc = new AutorControlador();    
    echo $tsc->eliminarConPOO($id);
}