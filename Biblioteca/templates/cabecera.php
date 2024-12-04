<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Escolar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
</body>
<div class="container-fluid bg-warning" >
    <!--Se necesita la clase boostrap para que le de color al emcabvezado y que elinie los elementosen un solo bloque-->
    <!--La clase container-fluid bg-warning sirve para poner el color de fondo-->
   <div class="container text-center">
        <div class="row">
           <div class="col">
             <img src="img/logo.png" alt="" width="100px">
           </div>
           <div class="col bg-info rounded" >
             <strong class="temaprincipal">Biblioteca Escolar CBtis No. 187</strong>
           </div>
           <div class="col">
           <img src="img/bandera sin fondo.png" alt="" width="150px">
        
           </div>
  
        </div>
   </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6f42c1">

<ul class="nav navbar-nav">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false" Libros>
         Libros
       </a>
        <ul class="dropdown-menu">
         <li><a class="dropdown-item" class="" href="registro_libros.php">Registrar nuevo libro</a></li>
         <li><a class="dropdown-item" href="libros_registrados.php">Mostrar libros registrados</a></li>
        </ul>

    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" Usuarios>
         Usuarios
        </a>

        <ul class="dropdown-menu">
         <li> <a class="dropdown-item" href="registro_usuarios_alumnos.php">Registrar nuevo alumno</a></li>
         <li><a class="dropdown-item" href="registro_usuarios_docentes.php">Registrar nuevo docente</a></li>
         <li><a class="dropdown-item" href="alumnos_registrados.php">Mostrar alumnos registrados</a></li>
         <li><a class="dropdown-item" href="docentes_registrados.php">Mostrar docentes registrados</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">

    <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Movimientos

    </a>

    <ul class="dropdown-menu">

       <li><a class="dropdown-item" href="prestamos.php">Realizar prestamo</a></li>

        <li><a class="dropdown-item" href="devoluciones.php">Devolver libro</a></li>

       <li><a class="dropdown-item" href="libros_prestados.php">Mostrar prestamos</a></li>

    </ul>

    </li>

    <li class="nav-item">

     <a class="nav-link" href="nosotros.php">Nosotros</a>

    </li>

    </div>

    </div>
</ul>
</nav>
<div class="container">
    <br>
    <div class="row">

    </div>

</div>
