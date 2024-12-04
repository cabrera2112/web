<?php include("templates/cabecera.php"); ?>
<div class=" border border-start-0 shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="container-fluid bg-warning text-center">
        <h2>Registro de libros</h2>
</div>
<form action="registro_libros.php" method="POST" class="row g-3 needs-validation pt-3" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="" required>
</div>
<div class="col-md-4">
    <label for="validationCustom02" class="form-label">ID_LOCAL</label>
    <input type="text" class="form-control" name="id_local" value="" required>
</div>
<div class="col-md-4">
    <label for="validationCustom02" class="form-label">TITULO</label>
    <input type="text" class="form-control" name="titulo" value="" required>
</div>
<div class="col-md-4">
    <label for="validationCustom02" class="form-label">GENERO</label>
    <input type="text" class="form-control" name="genero" value="" required>
</div>
<div class="col-md-4">
    <label for="validationCustom02" class="form-label">EDITORIAL</label>
    <input type="text" class="form-control" name="editorial" value="" required>
</div>
<div class="col-md-4">
    <label for="validationCustom02" class="form-label">EDICION</label>
    <input type="text" class="form-control" name="edicion" value="" required>
</div>
<div class="col-md-2">
    <label for="validationCustom02" class="form-label">AÑO DE PUBLICACION</label>
    <?php $cont = date('Y'); ?>
    <select class="form-control" name="anopub" value="" required>
        <?php while ($cont >= 1950) { ?>
            <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
            <?php $cont = ($cont-1); } ?>
    </select>
    </div>
        
<div class="col-md-2">
    <label for="validationCustom01" class="form-label">CANTIDAD</label>
    <input type="number" class="form-control" name="cantidad" value="" required>
        </div>
        <div class="col-md-4">
    <label for="validationCustom02" class="form-label">NOMBRE DEL AUTOR</label>
    <input type="text" class="form-control" name="nomautor" value="" required>
        </div>
        <div class="col-md-4">
    <label for="validationCustom02" class="form-label">AP. DEL AUTOR</label>
    <input type="text" class="form-control" name="apautor" value="" required>
        </div>
        <div class="col-md-4">
    <label for="validationCustom02" class="form-label">AM. DEL AUTOR</label>
    <input type="text" class="form-control" name="amautor" value="" required>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit" value="Guardar">Guardar</button>
            <button class="btn btn-primary" type="button"
            onclick="window.location.href='index.php';">Cancelar</button>
        </div>
        
        </form>
        </div>
        
        <?php include("templates/pie.php"); ?>

        <?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'conectar.php';
    $obj = new OperacionesBiblioteca;
    $isbn=$_POST['isbn'];
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $editorial = $_POST['editorial'];
    $edicion = $_POST['edicion'];
    $anopub = $_POST['anopub'];
    $cantidad = $_POST['cantidad'];
    $nomautor = $_POST['nomautor'];
    $apautor = $_POST['apautor'];
    $amautor = $_POST['amautor'];
    $sql = "INSERT INTO libros (isbn, titulo, genero, editorial, edicion, ano_publ, cantidad, nom_autor, ap_autor, am_autor) VALUES
    ('$isbn','$titulo','$genero','$editorial','$edicion','$anopub','$cantidad','$nomautor','$apautor','$amautor');";
    $obj->guardardatos($sql);
 }

?>
