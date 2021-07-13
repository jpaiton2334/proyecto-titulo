<?php





  session_start();
  if(!isset($_SESSION["rol"])){
    header('location: login.php');
  
  
  }else{
     if ($_SESSION['rol'] !=1) {
          header('location: login.php');
     }
   
  }
  

?>



<?php
require('conexion.php');

// use the connection here
$sql = $pdo->query('SELECT delincuente.nombres,tipo_delito.nombre
FROM nuevo_delito_delincuente,delincuente,tipo_delito
 WHERE nuevo_delito_delincuente.id_delincuente = delincuente.id AND
nuevo_delito_delincuente.tipo_delito = tipo_delito.id
;
');
$resultado = $sql->fetchall();

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="estilos_index.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
 
  <!--datables CSS básico-->
  <!-- <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
   datables estilo bootstrap 4 CSS
  <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css"> -->

  <!--font awesome con CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="shortcut icon" href="iconos/justicie.PNG" type="image/x-icon">


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
        <a href="#inicio">  <img src="img/fondos/uwu2.png" name="inicio" alt="Los Angeles" style="width:100%;" href="#inicio"></a>
      
      </div>

      <div class="item">
        <a href="#inicio"> <img src="img/fondos/fondo2.png" alt="Chicago" style="width:100%;"></a>
       
      </div>
    
      <div class="item">
        <a href="#inicio"> <img src="img/fondos/martillo.png" alt="New york" style="width:100%;"></a>
       
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



    <nav class="navbar navbar-expand-lg " >
      <div class="container-fluid"  id="nav2">
        <a class="navbar-brand" href="index.php"  id="inicio">  <i class="fas fa-home"></i> Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav  mr-auto">
            <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Registro de Datos Institucion
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                <li><a class="dropdown-item" href="formularios/registrar_nuevo_sector.php">Asignar sector</a></li>
                <li><a class="dropdown-item" href="formularios/registrar_delincuente.php">Nuevo delincuente</a></li>
                <li><a class="dropdown-item" href="formularios/registro_delito.php">Nuevo delito delincuente</a></li>
                <li><a class="dropdown-item" href="formularios/registrar_pariente.php">Nuevo pariente</a></li>
                <li><a class="dropdown-item" href="formularios/registrar_parentesco.php">Nuevo parentesco</a></li>


              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Listado de delincuentes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="listado_datos/listado_delincuentes.php">delincuentes por alfabeto</a></li>
                <li><a class="dropdown-item" href="listado_datos/comuna_delincuente.php">delincuentes por comuna</a></li>
                <li><a class="dropdown-item" href="listado_datos/ultima_ves_visto.php">delincuente ultima ves visto</a></li>
                <li><a class="dropdown-item" href="listado_datos/listado_fechas_especificas.php">Listado por fechas especificas</a></li>
                <li><a class="dropdown-item" href="listado_datos/listado_comunas.php">Listado comunas</a></li>


              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Registro de Datos Administrador
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="formularios/registrar_instituciones.php">Registro de instituciones</a></li>
                <li><a class="dropdown-item" href="formularios/registrar_comuna.php">Nueva Comuna</a></li>
                <li><a class="dropdown-item" href="formularios/registrar_sector.php">Nuevo sector</a></li>
                <li><a class="dropdown-item" href="formularios/registrar_tipo_delito.php">Tipo de delito</a></li>


              </ul>
            </li>

            <li class="nav-item">

              <a class="nav-link" href="formularios/registro_usuario.php"> <i class="fas fa-user-plus"></i> Registrar usuario</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="salir.php"><i class="fas fa-user-times"></i> Cerrar sesion</a>
            </li>
           <li class="nav-item">
		     	<a class="nav-link" href="javascript:history.back()" name="volver">Volver atras </a>

            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li>
          <a class="nav-link" href="index.php"><i class="fas fa-balance-scale"></i></i> PREVCRIM</a>
          </li>
				
				</ul>
          
        </div>
      </div>
      
    </nav>


   





  <div class="container mb-5">


    <div class="row"  id="card">

    <div class="col-10 col-md-4 col-lg-3 mt-5" >
        <div class="card " style="width: 85%; height: 100%;">
  
          <img src="img/map.png" width="50" height="200" class="card-img-top" alt="...">  
          <div class="card-body ">
            <h5 class="card-title"> Sectores donde se han ocasionado robos</h5>
            <p class="card-text">Mapa global se sectores </p>
            <a href="mapas/mp/index.php" class="btn btn-primary"> Ir al mapa</a>
          </div>
        </div>
      </div>


      <div class="col-10 col-md-4 col-lg-3 mt-5" >
        <div class="card " style="width: 85%; height: 100%;">
  
          <img src="img/user.png" width="50" height="200" class="card-img-top" alt="...">  
          <div class="card-body ">
            <h5 class="card-title"> Crear usuarios </h5>
            <p class="card-text">Crear usuarios operador para una institucion</p>
            <a href="formularios/registro_usuario.php" class="btn btn-primary"> Crear usuario</a>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/justy.png" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Registro de instituciones</h5>
            <p class="card-text">Registro de instituciones policiales</p>
            <a href="formularios/registrar_instituciones.php" class="btn btn-info">Registrar institucion </a>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/map.png" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Registro de comunas </h5>
            <p class="card-text">Registro de comunas para monitorear</p>
            <a href="formularios/registrar_comuna.php" class="btn btn-info">Registro de comunas </a>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/map2.png" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crear sectores </h5>
            <p class="card-text">Crear sectores para monitorear</p>
            <a href="formularios/registrar_sector.php" class="btn btn-info">Registrar sector</a>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 col-lg-3  mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/offender.png" width="50" height="200"  class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">listado de delincuentes</h5>
            <p class="card-text">ver delincuentes ordenados alfabeticamente.</p>
            <a href="listado_datos/listado_delincuentes.php" class="btn btn-info">Ver delincuentes </a>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4  col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/offender.png" width="50" height="200"  class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">listado de delincuentes</h5>
            <p class="card-text">ver listado de delincuentes por comuna</p>
            <a href="listado_datos/comuna_delincuente.php" class="btn btn-info">Ver delincuentes </a>
          </div>
        </div>
      </div>


      <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/offender.png" width="50" height="200"  class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">listado de delincuentes </h5>
            <p class="card-text">listado de delincuentes ultima vez visto</p>
            <a href="listado_datos/ultima_ves_visto.php" class="btn btn-info">Ver delincuentes </a>
          </div>
        </div>
      </div>


     

    </div><!------fiv del row--->




    <div class="row"  id="card">
    
    <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/crimen.png" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Listado de delitos</h5>
            <p class="card-text">fecha de delitos de delincuentes</p>
            <a href="listado_datos/listado_fechas_especificas.php" class="btn btn-info">ver delitos </a>
          </div>
        </div>
      </div>

    <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/map.png" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">listado de comunas </h5>
            <p class="card-text">listado de comunas en santiago</p>
            <a href="listado_datos/listado_comunas.php" class="btn btn-info">Ver comunas </a>
          </div>
        </div>
      </div>


      <div class="col-10 col-md-4 col-lg-3 mt-5" id="card">
        <div class="card " style="width:  85%; height: 100%;">
          <img src="img/map2.png" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title">Asignar sector </h5>
            <p class="card-text">Asignar un sector para una institucion </p>
            <a href="formularios/registrar_nuevo_sector.php" class="btn btn-info">Asignar sector</a>
          </div>
        </div>
      </div>


      <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/offender.png" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Registro de un delincuente</h5>
            <p class="card-text">Registra datos de un nuevo delincuente</p>
            <a href="formularios/registrar_delincuente.php" class="btn btn-info">Registrar delincuente</a>
          </div>
        </div>
      </div>



      <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card " style="width:  85%; height: 100%;">
          <img src="img/crimen.png" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title">Registrar delitos </h5>
            <p class="card-text">Registrar delitos de delincuentes</p>
            <a href="formularios/registro_delito.php" class="btn btn-info">Registrar delito</a>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/parientes.jpg" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Registrar pariente</h5>
            <p class="card-text">Registrar pariente de un delincuente</p>
            <a href="formularios/registrar_pariente.php" class="btn btn-info">Registrar pariente </a>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 col-lg-3 mt-5">
        <div class="card" style="width:  85%; height: 100%;">
          <img src="img/parentesco1.jpg" width="50" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Registrar parentesco</h5>
            <p class="card-text">Registrar tipo de parentesco para un delincuente</p>
            <a href="formularios/registrar_parentesco.php" class="btn btn-info">Registrar parentesco </a>
          </div>
        </div>
      </div>


    </div> <!------fiv del row--->



  </div>  <!------fiv del container--->



	<!-- Footer -->
	<footer class=" text-center " id="footer" width="100%">
		<!-- Grid container -->


		<!-- Section: Text -->
		<section class="mb-4">
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
				<div class="col-lg-4 col-md-12 mb-4 mb-md-0">
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
				<div class="col-lg-4 col-md-12 mb-4 mb-md-0">
					<h5 class="text-uppercase">
						Ir a otra pagina</h5>

					<ul class="list-unstyled mb-0">
						<li>
							<a href="index.php" class="text-white">Pagina principal</a>
						</li>
						<li>
							<a href="formularios/registrar_nuevo_sector.php" class="text-white">Asignar  sector</a>
						</li>
						<li>
							<a href="formularios/registrar_delincuente.php" class="text-white">Registro de delincuentes</a>
						</li>
						<li>
							<a href="formularios/registro_delito.php" class="text-white">Registro de delitos</a>
						</li>
						<li>
							<a href="formularios/registrar_pariente.php" class="text-white">Registro de parientes</a>
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
								href="https://www.facebook.com/CarabinerosdeChile" role="button"><i
									class="fab fa-facebook-f"></i></a>

						</li>
						<li>
							<!-- Instagram -->
							<a class="btn btn-outline-light btn-floating m-1"
								href="https://www.instagram.com/carabchile/?hl=es-la" role="button"><i
									class="fab fa-instagram"></i></a>

						</li>
						<li>
							<!-- Instagram -->
							<a class="btn btn-outline-light btn-floating m-1"
								href="https://www.youtube.com/user/TVCarabineros" role="button"><i
									class="fab fa-youtube"></i></a>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- datatables JS 
  <script type="text/javascript" src="datatables/datatables.min.js"></script> -->

  <!-- para usar botones en datatables JS -->


  <!-- código JS propìo
  <script type="text/javascript" src="main.js"></script> -->


</body>

</html>