<?php include("templates/cabecera.php"); ?>
<?php 
if(!empty($_GET['batman'])) {
    $batman=$_GET['batman'];
    include("conectar.php");
             $conexion= new OperacionesBd;
             $sql= "SELECT*FROM usuarios;";
             $resultado=$conexion->mostrardatos($sql);
             foreach ($resultado as $row){
    ?>

<div class=" border border-start-0 shadow p-3 mb-5 bg-body-tertiary rounded">
<div class="container-fluid bg-warning text-center">
<h2>Registro de alumnos</h2>
</div>
<form action="modificar_usuarios_docente.php" method="POST" class="row g-3
needs-validation pt-3" novalidate>
<div class="col-md-4">
<label for="validationCustom01" class="form-label">No. control</label>
<input type="text" class="form-control" id="nocontrol_rfc" value="<?php echo $row['nocontrol_rfc'] ?>"
name="nocontrol_rfc" required>
</div>

<div class="col-md-4">
<label for="validationCustom02" class="form-label">Nombre</label>
<input type="text" class="form-control" id="nom" value="<?php echo $row['nom'] ?>" name="nom" required>
</div>
<div class="col-md-4">
<label for="validationCustom03" class="form-label">A. Paterno</label>
<input type="text" class="form-control" id="ap" value="<?php echo $row['ap'] ?>" name="ap" required>
</div>
<div class="col-md-4">
<label for="validationCustom04" class="form-label">A. Materno</label>

<input type="text" class="form-control" id="am" value="<?php echo $row['am'] ?>" name="am" required>
</div>
<div class="col-md-4">
<label for="validationCustom05" class="form-label">Telefono celular</label>
<input type="text" class="form-control" id="cel_usuario" value="<?php echo $row['cel_usuario'] ?>"
name="cel_usuario" required>
</div>

<div class="col-12 text-center">
<button class="btn btn-primary" type="submit" value="Guardar">Guardar</button>
<button class="btn btn-primary" type="submit">Cancelar</button>
</div>
</form>
</div>

<?php
}}
?>

<?php include("templates/pie.php"); ?>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {

include 'conectar.php';

$obj = new OperacionesBd;
$nocontrol_rfc= $_POST['nocontrol_rfc'];
$nom = $_POST['nom'];
$ap = $_POST['ap'];
$am = $_POST['am'];
$cel_usuario = $_POST['cel_usuario'];

$sql ="UPDATE usuarios SET nocontrol_rfc ='$nocontrol_rfc', nom ='$nom', ap ='$ap', am ='$am', cel_usuario ='$cel_usuario'";
$obj->actualizadatos($sql);
header("location: usuarios_registrados.php");

}
?>