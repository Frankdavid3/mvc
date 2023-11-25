<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id_ts" placeholder="Ingrese id de CarreraProfesional"><br>;
    <input type="text" name="id_student" placeholder="Ingrese id de Student"><br>
    <input type="submit" value="Generar Autor"><br>
</form>
<?php
if(!empty($_POST)){
    $id_ts = $_POST['id_ts'];
    $id_student = $_POST['id_student'];
    include_once "Controladores/CarreraProfesionalControlador.php";
    $lc = new AutorControlador();
    echo $lc->guardar($id_ts, $id_student);
}