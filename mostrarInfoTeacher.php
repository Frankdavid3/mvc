<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id" placeholder="Ingrese id Teacher"><br>
    <input type="submit" value="Buscar"><br>
</form>
<?php
if(!empty($_POST)){
    $id = $_POST['id'];
    include_once "Controladores/TeacherControlador.php";
    $tc = new TeacherControlador();    
    $resultado = $tc->getTeacherPorId($id);

    ?>
        <table border="1px solid">
            <tr>
                <th>Teacher</th>
                <th>Languaje</th>
                <th>Start At</th>
                <th>Type</th>
            </tr>
            <?php
                foreach($resultado as $item){
                    echo "<tr>
                            <td>".$item["name"]."</td>
                            <td>".$item["language"]."</td>
                            <td>".$item["starts_at"]."</td>
                            <td>".$item["type"]."</td>
                         </tr>";
                }
            ?>
        </table> 
    <?php
}