<?php 
require('../conexion.php');

session_start();
if(!isset($_SESSION["rol"])){
  header('location: login.php');


}else{
   if ($_SESSION['rol'] !=1) {
        header('location: login.php');
   }
 
}

 

// use the connection here
$sth = $pdo->query('SELECT * FROM comuna;
');
$resultado = $sth->fetchall();

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Listado comunas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../main.css">  
    <link rel="stylesheet" href="../estilos_index.css">
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      
  </head>
    
  <body> 
      <!-- inicio carrusel de imagenes -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<a href="#inicio" >	<img src="../img/fondos/uwu2.png"   alt=" " style="width:100%;" ></a>
			
			</div>

			<div class="item">
				<a href="#inicio">	<img src="../img/fondos/fondo2.png"  alt="" style="width:100%;"></a>
			
			</div>

			<div class="item">
			<a href="#inicio">	<img src="../img/fondos/martillo.png"  alt="" style="width:100%;"></a>
			
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

	<!-- fin carrusel de imagenes -->

	<!-- inicio barra de navegacion -->
	<nav class="navbar navbar-expand-lg"  >
      <div class="container-fluid"  id="nav2">
        <a class="navbar-brand" href="../index.php"  >  <i class="fas fa-home"></i> Inicio</a>
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

                <li><a class="dropdown-item" href="../formularios/registrar_nuevo_sector.php">Asignar sector</a></li>
                <li><a class="dropdown-item" href="../formularios/registrar_delincuente.php">Nuevo delincuente</a></li>
                <li><a class="dropdown-item" href="../formularios/registro_delito.php">Nuevo delito delincuente</a></li>
                <li><a class="dropdown-item" href="../formularios/registrar_pariente.php">Nuevo pariente</a></li>
                <li><a class="dropdown-item" href="../formularios/registrar_parentesco.php">Nuevo parentesco</a></li>


              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Listado de delincuentes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="../listado_datos/listado_delincuentes.php">delincuentes por alfabeto</a></li>
                <li><a class="dropdown-item" href="../listado_datos/comuna_delincuente.php">delincuentes por comuna</a></li>
                <li><a class="dropdown-item" href="../listado_datos/ultima_ves_visto.php">delincuente ultima ves visto</a></li>
                <li><a class="dropdown-item" href="../listado_datos/listado_fechas_especificas.php">Listado por fechas especificas</a></li>
                <li><a class="dropdown-item" href="../listado_datos/listado_comunas.php">Listado comunas</a></li>


              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../salir.php"><i class="fas fa-user-times"></i> Cerrar sesion</a>
            </li>
			<li class="nav-item">
			<a  class="nav-link" href="javascript:history.back()" name="volver">Volver atras </a>

            </li>
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
				  <a class="nav-link" href="../index.php"><i class="fas fa-balance-scale"></i></i> PREVCRIM</a>
				</ul>
          
        </div>
      </div>
      
    </nav>
  
         <h3 class="text-center" id="inicio">Listado comunas<span class="badge badge-warning"></span></h3> 
     </header>    
    <div style="height:50px"></div>
 
    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">    
                        
                 
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                               <th>Nombre</th>
                              <!-- <th>funciones</th> -->
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($resultado as $row) { ?>
                            <tr>
                                <td><?php  echo $row['id'] ?></td>
                                <td><?php  echo $row['nombre'] ?></td>
                              
                                <!-- <td>
                              <a href="#edit_<?php echo $row['id']; ?>" class='btn btn-success btn-sm' data-toggle='modal'
                              ><i class="fas fa-user-edit"></i></span> Editar</a>
                              <a href='#delete_<?php echo $row['id'];?>'class='btn btn-danger btn-sm' data-toggle='modal'
                              ><i class="far fa-trash-alt"></i> Borrar</a>
                              </td> -->
                            </tr>
                            <?php include('../modal/edit_delete_comunas.php'); ?>
                               
                        <?php }?>                    
                        </tbody>        
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    

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
							<a href="#tabla" class="text-white">Tabla</a>
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
							<a href="../index.php" class="text-white">Pagina principal</a>
						</li>
						<li>
							<a href="../formularios/registrar_nuevo_sector.php" class="text-white">Asignar  sector</a>
						</li>
						<li>
							<a href="../formularios/registrar_delincuente.php" class="text-white">Registro de delincuentes</a>
						</li>
						<li>
							<a href="../formularios/registro_delito.php" class="text-white">Registro de delitos</a>
						</li>
						<li>
							<a href="../formularios/registrar_pariente.php" class="text-white">Registro de parientes</a>
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="../jquery/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../datatable/jquery.dataTables.min.js"></script>
<script src="../datatable/dataTable.bootstrap.min.js"></script>
<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- datatables JS -->
<script type="text/javascript" src="../datatables/datatables.min.js"></script>    
 
<!-- para usar botones en datatables JS -->  
<script src="../datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
<script src="../datatables/JSZip-2.5.0/jszip.min.js"></script>    
<script src="../datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
<script src="../datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script src="../datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
 
<!-- código JS propìo-->    
<script type="text/javascript" src="../main.js"></script>  
  </body>
</html>
