<?php
require('../../conexion.php');

session_start();
if (!isset($_SESSION["rol"])) {
  header('location: login.php');
} else if (!$_SESSION['rol'] == 5 || !$_SESSION['rol'] == 1 )   {
    header('location: ../../login.php');
  }



?>
 
<!DOCTYPE html>
<html lang="en">

<head>

<link rel="shortcut icon" href="../../iconos/pdi.jpg" type="image/x-icon">
  <!--font awesome con CDN-->  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilos_formulario_registro.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuario PDI</title>
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
    <a class="navbar-brand color-green" href="usuario_carabinero.php">
    <img src="../../iconos/pdi.jpg" width="50" alt="">
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
          <img src="../../img/906916a.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title">Registrar delitos </h5>
            <p class="card-text">Registrar delitos de delincuentes</p>
            <a href="../../formularios/registro_delito.php" class="btn btn-primary">Registrar delito</a>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-4 mt-5">
        <div class="card" style="width: 18rem;">
          <img src="../../img/delincuente1.jpg"  width="50" height="150" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Registro de un delincuente</h5>
            <p class="card-text">Registra datos de un nuevo delincuente</p>
            <a href="../../formularios/registrar_delincuente.php" class="btn btn-primary">Registrar delincuente</a>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-4 mt-5">
      <div class="card" style="width: 18rem;">
      <img src="../../img/listado_delincuentes.jpg"  width="50" height="150" class="card-img-top" alt="...">
       <div class="card-body">
    <h5 class="card-title">Registrar pariente</h5>
    <p class="card-text">Registrar pariente de un delincuente</p>
    <a href="../../formularios/registrar_pariente.php" class="btn btn-primary">Registrar pariente </a>
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
    <a href="#" class="btn btn-primary">Ver delincuentes PENDIENTE</a>
  </div>
</div>
</div>

<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 18rem;">
  <img src="../../img/counas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de delincuentes</h5>
    <p class="card-text">ver listado de delincuentes por comuna</p>
    <a href="../../listado_datos/comuna_delincuente.php" class="btn btn-primary">Ver delincuentes </a>
  </div>
</div>
</div>

<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 18rem;">
  <img src="../../img/horario.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Listado de delitos</h5>
    <p class="card-text">fecha de delitos de delincuentes</p>
    <a href="../../listado_datos/listado_fechas_especificas.php" class="btn btn-primary">ver delitos </a>
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
    <a href="../../listado_datos/ultima_ves_visto.php" class="btn btn-primary">Ver delincuentes </a>
  </div>
</div>
</div>


<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 18rem;">
  <img src="../../img/parientes.jpg"   width="50" height="150" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de parientes</h5>
    <p class="card-text">listado de parientes de delincuentes</p>
    <a href="../../listado_datos/listado_parientes.php" class="btn btn-primary">Ver delincuentes </a>
  </div>
</div>
</div>


</div>
  </div>

  <footer class="bg-light text-center text-lg-start mt-3">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(15, 20, 131);color:white;">
    © 2021, Si tienes problemas con la pagina comunicate con :
    <a class="" style="color:aliceblue" href="mailto:jpabloperaltacasanova@gmail.com"> jpabloperaltacasanova@gmail.com</p></a>
  </div>
  
  <!-- Copyright -->
</footer>
  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>