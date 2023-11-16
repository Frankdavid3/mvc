<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id" placeholder="Ingrese id de Autor"><br>
    <input type="submit" value="Eliminar"><br>
</form>
<?php
if(!empty($_POST)){
    $id = $_POST['id'];
    include_once "Controladores/AutorControlador.php";
    $tsc = new TimeSlotControlador();    
    echo $tsc->eliminarConPOO($id);
}