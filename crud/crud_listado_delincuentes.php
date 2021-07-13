<?php 
require('../conexion.php');
session_start();

if (!isset($_SESSION["rol"])) {
  header('location: ../../login.php');
} else if (!$_SESSION['rol'] == 3 || !$_SESSION['rol'] == 1 || !$_SESSION['rol'] == 2 || !$_SESSION['rol'] == 4)   {
    header('location: ../../login.php');
  }



 
  $sth = $pdo->query('SELECT delincuente.id, delincuente.nombres, delincuente.apellidos,  estado.nombre, delincuente.foto
  FROM delincuente,estado
  where 
  delincuente.estado = estado.id 
  ORDER BY id,nombres,apellidos,estado,foto ASC
  ');
                          $resultado = $sth->fetchall();



 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#" />  
    <title>Delincuentes</title>
	<link rel="shortcut icon" href="../iconos/justicie.PNG" type="image/x-icon">


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




  </head>
    <style>

		
@media (max-width: 400px ){

table {

width : 100%;

}


#example tr {

display: flex;
flex-direction: column;
border: 1px solid grey;
padding: 1em;
margin-bottom: 1em;
background-color:blue;
}
}
	


	
	</style>
  <body> 



<ul class=" nav justify-content-center mt-20" style="background-color:#8059F5">
<li class="nav-item">
<img src="../iconos/carabinero.jpg " width="60" class="mb-4 mt-4" alt="">
</li>
  <li class="nav-item">
  
    <a class="nav-link active mb-4 mt-4 ms-5 text-white "   aria-current="page" href="#">INICIO</a>
  </li>

  <li class="nav-item mb-4 mt-4">
  <a class="nav-link text-white"  href="../salir.php"><i class="fas fa-user-times"></i> CERRAR  SESION</a>
  </li>

  <li class="nav-item mb-4 mt-4 ">
						<a class="nav-link  text-white" href="javascript:history.back()" name="volver">VOLVER ATRAS </a>

					</li>
  <li class="nav-item mb-4 mt-4 ">
  <a class="nav-link text-white " href="#"><i class="fas fa-balance-scale"></i></i> PREVCRIM</a>
  </li>
</ul>



     <h1 class="text-center ">REGISTROS</h1>
         <h2 class="text-center ">Listado de delincuentes por alfabeto <span class="badge badge-warning"></span></h2> 
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
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Foto</th>
								<th>Estado</th>
                                <th>Acciones</th>
                              
                            </tr>
                        </thead>
                        <tbody>

                          <?php 
                        
                          foreach($resultado as $row){ ?>
                  <tr>
                  <td> <?php echo  $row['nombres'] ?></td>
                  <td><?php echo $row['apellidos'] ?></td>
                 
                  
              <?php    echo "<td>"; echo "<img src='".$row['foto']."' width='100' height='100' >"; echo "</td>"; ?>
			  <td><?php echo $row['nombre'] ?></td>
                
                  <td>
                  <a href="#edit_<?php echo $row['id']; ?>" class='btn btn-success btn-sm' data-toggle='modal'
                  ><i class="fas fa-user-edit"></i></span> Editar</a>
                  <a href='#delete_<?php echo $row['id'];?>'class='btn btn-danger btn-sm' data-toggle='modal'
                  ><i class="far fa-trash-alt"></i> Borrar</a>
                  </td>
                </tr>
                <?php include('../modal/modal_delincuentes.php'); ?>
                   
            <?php }?>                    
            </tbody>        
           </table>                           
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
    <script src="../jquery/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../datatable/jquery.dataTables.min.js"></script>
<script src="../datatable/dataTable.bootstrap.min.js"></script>

 <!-- jQuery, Popper.js, Bootstrap JS -->
 <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   <!-- para usar botones en datatables JS -->  
       <!-- datatables JS -->
       <script type="text/javascript" src="../datatables/datatables.min.js"></script>    
     
   <script src="../datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="../datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
      <!-- código JS propìo-->    
      <script type="text/javascript" src="../main.js"></script>  
  </body>
</html>
