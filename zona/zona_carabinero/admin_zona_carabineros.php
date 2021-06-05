<?php
require('../../conexion.php');

session_start();
if (!isset($_SESSION["rol"])) {
  header('location: ../../login.php');
} else if (!$_SESSION['rol'] == 5 || !$_SESSION['rol'] == 1 )   {
    header('location: ../../login.php');
  }



?>
 
<!DOCTYPE html>
<html lang="en">

<head>

<link rel="shortcut icon" href="../../iconos/carabinero.jpg" type="image/x-icon">
  <!--font awesome con CDN-->  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilos_formulario_registro.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador Carabinero</title>
  <style>
    form {

      width: 50%;
    }
  </style>
</head>

<body>

<header >
  <link rel="stylesheet" href="estilos.css">
     <nav class="navbar navbar-expand-lg navbar-light bg-light " >
  <div class="container-fluid">
    <a class="navbar-brand color-green" href="admin_zona_carabineros.php">
    <img src="../../iconos/carabinero.jpg" width="50" alt="">
   Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown" >
      <ul class="navbar-nav" >
      <li class="nav-item" >
          <a class="nav-link" href="../../salir.php"><i class="fas fa-user-times"></i> Cerrar sesion</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           listado de delincuentes 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../listado_delincuentes.php">delincuentes por alfabeto</a></li>
            <li><a class="dropdown-item" href="comuna_delincuente.php">delincuentes por comuna</a></li>
            <li><a class="dropdown-item" href="../ultima_ves_visto.php">delincuente ultima ves visto</a></li>
          </ul>
        </li> -->

        <li class="nav-item ">
          <a class="nav-link" href="#"><i class="fas fa-balance-scale"></i></i> PREVCRIM</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <div class="container">
    <div class="row">



      <div class="col-12 col-md-4 mt-5">
        <div class="card " style="width: 18rem;">
          <img src="../../img/usuario.png" width="50" height="200" class="card-img-top"  alt="...">
          <div class="card-body ">
            <h5 class="card-title"> Crear usuarios </h5>
            <p class="card-text">Crear usuarios operador para una institucion</p>
            <a href="../../formularios/registro_usuario.php" class="btn btn-success"> Crear usuario</a>
          </div>
        </div>
      </div>


      <!-- <div class="col-12 col-md-4 mt-5">
        <div class="card" style="width: 18rem;">
          <img src="../../img/sector.jpg"  width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crear sectores </h5>
            <p class="card-text">Crear sectores para monitorear</p>
            <a href="../../formularios/registrar_sector.php" class="btn btn-success">Registrar sector</a>
          </div>
        </div>
      </div> -->

      
      <div class="col-12 col-md-4 mt-5">
        <div class="card" style="width: 18rem;">
          <img src="../../img/sector.jpg"  width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Asignar sectores </h5>
            <p class="card-text">Crear sectores para monitorear</p>
            <a href="../../formularios/registrar_nuevo_sector.php" class="btn btn-success">Registrar sector</a>
          </div>
        </div>
      </div>



    </div>

<div class="row">


<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 18rem;">
  <img src="../../img/listado_delincuentes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de delincuentes</h5>
    <p class="card-text">ver delincuentes ordenados alfabeticamente.</p>
    <a href="../../listado_datos/listado_delincuentes.php" class="btn btn-success">Ver delincuentes </a>
  </div>
</div>
</div>

<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 18rem;">
  <img src="../../img/counas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de delincuentes</h5>
    <p class="card-text">ver listado de delincuentes por comuna</p>
    <a href="../../listado_datos/comuna_delincuente.php" class="btn btn-success">Ver delincuentes </a>
  </div>
</div>
</div>

<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 18rem;">
  <img src="../../img/horario.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Listado de delitos</h5>
    <p class="card-text">fecha de delitos de delincuentes</p>
    <a href="../../listado_datos/listado_fechas_especificas.php" class="btn btn-success">ver delitos </a>
  </div>
</div>
</div>
</div>


<div class="row">

<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 18rem;">
  <img src="../../img/lupa.png"  width="50" height="150" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de delincuentes </h5>
    <p class="card-text">listado de delincuentes ultima vez visto</p>
    <a href="../../listado_datos/ultima_ves_visto.php" class="btn btn-success">Ver delincuentes </a>
  </div>
</div>
</div>


<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 18rem;">
  <img src="../../img/parientes.jpg"   width="50" height="150" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de parientes</h5>
    <p class="card-text">listado de parientes de delincuentes</p>
    <a href="../../listado_datos/listado_parientes.php" class="btn btn-success">Ver delincuentes </a>
  </div>
</div>
</div>


</div>
  </div>

  <footer class="bg-light text-center text-lg-start mt-3">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(20, 112, 20 );color:aliceblue;">
    © 2021, Si tienes problemas con la pagina comunicate con :
    <a class="" style="color:(38, 218, 36);" href="mailto:jpabloperaltacasanova@gmail.com"> jpabloperaltacasanova@gmail.com</p></a>
  </div>
  
  <!-- Copyright -->
</footer>
  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>