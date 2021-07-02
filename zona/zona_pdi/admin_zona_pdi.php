<?php
require('../../conexion.php');

session_start();
if (!isset($_SESSION["rol"])) {
  header('location: ../../login.php');
} else if (!$_SESSION['rol'] == 2 || !$_SESSION['rol'] == 1 )   {
    header('location: ../../login.php');
  }



?>
 
<!DOCTYPE html>
<html lang="en">

<head>

<link rel="shortcut icon" href="../../iconos/pdi.jpg" type="image/x-icon">
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador PDI</title>
  <link rel="stylesheet" href="../../estilos_formulario_registro.css">


	<link rel="stylesheet" href="../../estilos_index.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!--font awesome con CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
		integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <a href="#inicio">  <img src="../../img/fondos/uwu2.png" name="inicio" alt="Los Angeles" style="width:100%;" href="#inicio"></a>
      
      </div>

      <div class="item">
        <a href="#inicio"> <img src="../../img/fondos/fondo2.png" alt="Chicago" style="width:100%;"></a>
       
      </div>
    
      <div class="item">
        <a href="#inicio"> <img src="../../img/fondos/martillo.png" alt="New york" style="width:100%;"></a>
       
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




<ul class=" nav justify-content-center mt-20" style="background-color:#8059F5">
<li class="nav-item">
<img src="../../iconos/pdi.jpg " width="60" class="mb-4 mt-4" alt="">
</li>
  <li class="nav-item">
  
    <a class="nav-link active mb-4 mt-4 ms-5 text-white "   aria-current="page" href="admin_zona_pdi.php">INICIO</a>
  </li>

  <li class="nav-item mb-4 mt-4">
  <a class="nav-link text-white"  href="../../salir.php"><i class="fas fa-user-times"></i> CERRAR  SESION</a>
  </li>
  <li class="nav-item mb-4 mt-4 ">
  <a class="nav-link text-white" href="#"><i class="fas fa-balance-scale"></i></i> PREVCRIM</a>
  </li>
</ul>


<div class="container">
    <div class="row">



      <div class="col-12 col-md-4 mt-5" >
        <div class="card " style="width: 75%; height: 100%;">
          <img src="../../img/user.png" width="50" height="200" class="card-img-top"  alt="..." id="inicio">
          <div class="card-body ">
            <h5 class="card-title"> Crear usuarios </h5>
            <p class="card-text">Crear usuarios operador para una institucion</p>
            <a href="registros/usuario_pdi.php" class="btn btn-primary"> Crear usuario</a>
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
        <div class="card" style="width: 75%; height: 100%;">
          <img src="../../img/map2.png"  width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Asignar sectores </h5>
            <p class="card-text">Crear sectores para monitorear</p>
            <a href="registros/sector_pdi.php" class="btn btn-primary">Registrar sector</a>
          </div>
        </div>
      </div>



    </div>

<div class="row">


<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 75%; height: 100%;">
  <img src="../../img/offender.png" width="50" height="200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de delincuentes</h5>
    <p class="card-text">ver delincuentes ordenados alfabeticamente.</p>
    <a href="../../listado_datos/listado_delincuentes.php" class="btn btn-primary">Ver delincuentes </a>
  </div>
</div>
</div>

<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 75%; height: 100%;">
  <img src="../../img/offender.png" width="50" height="200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de delincuentes</h5>
    <p class="card-text">ver listado de delincuentes por comuna</p>
    <a href="../../listado_datos/comuna_delincuente.php" class="btn btn-primary">Ver delincuentes </a>
  </div>
</div>
</div>

<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 75%; height: 100%;">
  <img src="../../img/crimen.png"  width="50" height="200" class="card-img-top" alt="...">
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
<div class="card" style="width: 75%; height: 100%;">
  <img src="../../img/offender.png" width="50" height="200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de delincuentes </h5>
    <p class="card-text">listado de delincuentes ultima vez visto</p>
    <a href="../../listado_datos/ultima_ves_visto.php" class="btn btn-primary">Ver delincuentes </a>
  </div>
</div>
</div>


<div class="col-12 col-md-4 mt-5">
<div class="card" style="width: 75%; height: 100%;">
  <img src="../../img/parientes.jpg"   width="50" height="200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">listado de parientes</h5>
    <p class="card-text">listado de parientes de delincuentes</p>
    <a href="../../listado_datos/listado_parientes.php" class="btn btn-primary">Ver delincuentes </a>
  </div>
</div>
</div>


</div>
  </div>

<!-- Footer -->
<footer class=" text-center mt-5" id="footer" width="100%"  >
		<!-- Grid container -->


		<!-- Section: Text -->
		<section class="mb-4 mt-5" >
			<p>
				SERVICIO DE ATENCIÓN AL CLIENTE
				+56937776213
			</p>
		</section>
		<!-- Section: Text -->

		<!-- Section: Links -->
		<section class="">
			<!--Grid row-->
			<div class="row">
				<!--Grid column-->
				<div class="col-lg-4 col-md-12 mb-4 mb-md-0" >
					<h5 class="text-uppercase">Movimiento dentro de la pagina</h5>

					<ul class="list-unstyled mb-0">
						<li>
							<a  href="#inicio" class="text-white">Inicio</a>
						</li>
						<li>
							<a href="#volver" class="text-white">Volver atras</a>
						</li>
						<li>
							<a href="#formulario" class="text-white">Formulario</a>
						</li>
						<li>
							<a href="#myCarousel" class="text-white">Fondo </a>
						</li>
						<li>
							<a href="#colum2" class="text-white">Foto </a>
						</li>
						<li>
							<a href="#colum3" class="text-white">Texto </a>
						</li>
						<!-- <li>
							<a href="#!" class="text-white">Términos y Condiciones </a>
						</li>

						<li>
							<a href="#!" class="text-white">Preguntas Frecuentes </a>
						</li>
						<li>
							<a href="#!" class="text-white">Mapa del sitio </a>
						</li> -->

					</ul>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-4 col-md-12 mb-4 mb-md-0 " >
					<h5 class="text-uppercase">
						Ir a otra pagina</h5>

					<ul class="list-unstyled mb-0" >
						<li>
							<a href="#" class="text-white">Pagina principal</a>
						</li>
						<li>
							<a href="#" class="text-white">Asignar  sector</a>
						</li>
						<li>
							<a href="#" class="text-white">Registro de delincuentes</a>
						</li>
						<li>
							<a href="#" class="text-white">Registro de delitos</a>
						</li>
						<li>
							<a href="#" class="text-white">Registro de parientes</a>
						</li>
					</ul>
				</div>
				<!--Grid column-->


				<!--Grid column-->
				<div class="col-lg-4 col-md-12 mb-4 mb-md-0">
					<h5 class="text-uppercase">SÍGUENOS
					</h5>

					<ul class="list-unstyled mb-0">
						<li>
							<a class="btn btn-outline-light btn-floating m-1"
								href="https://www.facebook.com/policiadeinvestigaciones" role="button"><i
									class="fab fa-facebook-f"></i></a>

						</li>
						<li>
							<!-- Instagram -->
							<a class="btn btn-outline-light btn-floating m-1"
								href="https://www.instagram.com/pdi_chile" role="button"><i
									class="fab fa-instagram"></i></a>

						</li>
						<li>
							<!-- Instagram -->
							<a class="btn btn-outline-light btn-floating m-1"
								href="https://twitter.com/PDI_CHILE?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" role="button"><i
									class="fab fa-twitter"></i></a>

						</li>
					</ul>
          
				</div>
				<!--Grid column-->
			</div>
			<!--Grid row-->
		</section>
		<!-- Section: Links -->
		</div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3">

			<a class="text-white" href="https://github.com/jpaiton2334">Instituciones policiales - Copyright © 2021 -
				Todos
				los derechos reservados.</a>
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer -->
  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>