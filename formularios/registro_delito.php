<?php 



require_once('../conexion.php');
session_start();
if (!isset($_SESSION["rol"])) {
  header('location: ../../login.php');
} else if (!$_SESSION['rol'] == 5 || !$_SESSION['rol'] == 1 )   {
    header('location: ../../login.php');
  }

// use the connection here

$consulta = $pdo->query('SELECT * from delincuente  order by  nombres asc;');
$consulta2= $pdo->query('SELECT * from tipo_delito;');
$consulta3= $pdo->query('SELECT * from sector;');

$resultado= $consulta->fetchall();
$resultado2= $consulta2->fetchall();
$resultado3= $consulta3->fetchall();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../estilos_formulario_registro.css">
	<link rel="shortcut icon" href="../iconos/justicie.PNG" type="image/x-icon">
	<link rel="stylesheet" href="form2.css">
	<link rel="stylesheet" href="../estilos_index.css">

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

    <title>Registro de delitos</title>

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
				<a href="#inicio" >	<img src="../img/fondos/uwu2.png"   alt=" " style="width:100%;"></a>
			
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


	<ul class=" nav justify-content-center mt-20 " style="background-color: #8059F5;" >
<li class="nav-item">
<img src="../../iconos/carabinero.jpg " width="60" class="mb-4 mt-4" alt="">
</li>
  <li class="nav-item">
  
    <a class="nav-link active mb-4 mt-4 ms-5 text-white "   aria-current="page" href="#">INICIO</a>
  </li>

  <li class="nav-item mb-4 mt-4">
  <a class="nav-link text-white"  href="../salir.php"><i class="fas fa-user-times"></i> CERRAR  SESION</a>
  </li>
  <li class="nav-item mb-4 mt-4 ">
  <a class="nav-link text-white" href="#"><i class="fas fa-balance-scale"></i></i> PREVCRIM</a>
  </li>
</ul>



	<!-- fin barra de navegacion -->



<div class="container">
<div class="row">
<div class="col-10 col-md-12 mt-4 mb-4 " id="colum1"> 

<form class="form-style-9" id="formulario">
<h3 class="mt-3" id="inicio">Registrar delito de delincuente</h3>
<label>Nombre delincuente</label>
<select name="id_delincuente" id="" class="form-control">
<?php 
foreach($resultado as $row){
?>
 <option value="<?php echo $row['id']?>"><?php echo $row['nombres'];  echo " ";echo $row['apellidos']?></option>
<?php
}
?>
</select>
<label>Tipo de delito</label>
<select name="tipo_delito" id="" class="form-control">
<?php 
foreach($resultado2 as $row1){
?>
 <option value="<?php echo $row1['id']?>"><?php echo $row1['nombre']?></option>
<?php
}
?>
</select>

<label>Sector</label>
<select name="sector" id="" class="form-control">
<?php 
foreach($resultado3 as $row2){
?>
 <option value="<?php echo $row2['id']?>"><?php echo $row2['nombre']?></option>
<?php
}
?>
</select>
<label>Descripcion</label>
<textarea   name="descripcion"  id="" cols="30" rows="4" autocomplete="off" minlength="10" maxlength="100" class="form-control" required> </textarea>
<label>direccion del delito</label>
<input type="text" name="direccion_delito" autocomplete="off" minlength="5" maxlength="100" class="form-control" required />

<label>fecha del delito</label>
<input type="date" name="fecha_delito" autocomplete="off"  class="form-control" min="2000-01-01" max="2023-12-31" required />

<button type="submit" class="btn btn-success mt-3" >Registrar</button>

					<!-- <input class="btn btn-success mt-3" type="submit" name="enviar" value="Registrar"> -->
					<div class="mt-3 " id="respuesta" >
				
					
					
					</div>
</form>
</div>

<div class="col-10 col-md-6 mt-4 mb-4" id="colum2">
				<img src="../img/crimen.png" alt="">

			</div>
			<div class=" col-10 col-md-6 mt-4 mb-4" id="colum3">
				<h3>registra delitos cometidos por un delincuente actualmente</h3>
			</div>
</div>
</div>
<?php
if(isset($_POST['id_delincuente'])&& isset($_POST['típo_delito'])&& isset($_POST['sector'])
&& isset($_POST['descripcion'])&& isset($_POST['direccion_delito'])
&& isset($_POST['fecha_delito']))
require_once('conexion.php');


?>

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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	<script>



var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');
formulario.addEventListener('submit', function(e){
    e.preventDefault();
    

    var datos = new FormData(formulario);
   // console.log(datos.get('comuna'))


   fetch('../formularios_guardar/guardar_delito.php',{

    method:'POST',
    body: datos
   })

   .then(res => res.json())
   .then(data =>{
    console.log(data)
    if(data ==='error'){
      respuesta.innerHTML = `
      <div class="alert alert-danger" data-dismiss="alert">
   
				llena todos los campos
            					
      </div>
      `
    }
    
    else if(data==='registrada'){
       respuesta.innerHTML= `
        <div class="alert alert-danger" role="alert">
         Descripcion de delito registrado recientemente			
        </div>
        `
    }
    
    else{
        respuesta.innerHTML= `
      <div class="alert alert-success" role="alert">
				
		${data}		
					
      </div>
      `
    }
   })
})


/*   respuesta.innerHTML= `
      <div class="alert alert-success" role="alert">
				
		${data}		
					
      </div>
      `  */

</script>


</body>
</html>