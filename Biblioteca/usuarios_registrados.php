<?php include("templates/cabecera.php"); ?>
<?php
// Incluimos un script para confirmar que no haya registros vacios 
//o nulos, es decir evitamos  errores y nos aseguramos que el script
// de eliminación no intente procesar un valor vacío o inexistente.
if (!empty($_GET['id_usuarios'])) {
    include("conectar.php");
    $conect = new OperacionesBd;
    $id = ($_GET['id_usuarios']); // Obtenemos el valor del id
    //que se va a eliminar
    $sql = "DELETE FROM usuarios WHERE id_usuarios = '$id'";
    $conect->eliminardatos($sql);
    header("Location: usuarios_registrados.php");
    exit; // Se recomienda usarse para finalizar el script 
    //después de la redirección
}
?>
<script>
    // Método de confirmación en JS
    function confirmarEliminacion(id_libros) {
        // confirm es un método propio de JavaScript que muestra un cuadro de diálogo
        if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
            // Redirigir a eliminar.php si el usuario confirma
            window.location.href = "usuarios_registardos.php?id_usuarios=" + id_usuarios;
        }
    }
</script>
<div class="container-fluid bg-warning text-center">
    <h2>Usuarios registrados</h2>
</div>
    <table class="table table-hover">
        <thead>
            <tr class="text-center">
            <th scope="col">Id_usuarios</th>
            <th scope="col">Identificador</th>
            <th scope="col">No. Control_RFC</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ap. Usuario</th>
            <th scope="col">Am. Usuario</th>
            <th scope="col">Celular</th>
            <th scope="col">Semestre</th>
            <th scope="col">Grupo</th>
            <th scope="col">Turno</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Modificar</th>
            <th scope="col">Eliminar</th>
         </tr>
    </thead>
    <tbody>
        <?php
             include("conectar.php");
             $conexion= new OperacionesBd;
             $sql= "SELECT*FROM usuarios;";
             $resultado=$conexion->mostrardatos($sql);
             foreach ($resultado as $row){

            ?>

             <tr>

               <th><?php echo $row['id_usuarios'] ?></th>
               <th><?php echo $row['identificador'] ?></th>
               <th><?php echo $row['nocontrol_rfc'] ?></th>
               <th><?php echo $row['nom'] ?></th>
               <th><?php echo $row['ap'] ?></th>
               <th><?php echo $row['am'] ?></th>
               <th><?php echo $row['cel_usuario'] ?></th>
               <th><?php echo $row['sem'] ?></th>
               <th><?php echo $row['grupo'] ?></th>
               <th><?php echo $row['turno'] ?></th>
               <th><?php echo $row['especialidad'] ?></th>

               <th class="text-center"><a href="modificar_usuarios_docente.php?batman=<?php echo $row['id_usuarios'] ?>"><img src="img/lapiz.png"alt="img/lapiz.png" alt="" style="width:30px; height:30px;"></a></td>
               <td class="text-center"><a href="usuarios_registrados.php?batman=<?php echo $row['id_usuarios'] ?>"><img src="img/bote.jpg" alt="" style="width:25px; height:25px;"></a></td>
               <?php
                // Incluimos un script para confirmar que no haya registros vacios 
                //o nulos, es decir evitamos  errores y nos aseguramos que el script
                // de eliminación no intente procesar un valor vacío o inexistente.
                if (!empty($_GET['id_usuarios'])) {
                    include("conectar.php");
                    $conect = new OperacionesBd;
                    $id = ($_GET['id_usuarios']); // Obtenemos el valor del id
                    //que se va a eliminar
                    $sql = "DELETE FROM usuarios WHERE id_usuarios = '$id'";
                    $conect->eliminardatos($sql);
                    header("Location: usuarios_registrados.php");
                    exit; // Se recomienda usarse para finalizar el script 
                    //después de la redirección
                }
                ?>
             </tr>
             <?php
             }
             ?>

            </tr>
            </table>
            <?php include("templates/pie.php");?>
</table>