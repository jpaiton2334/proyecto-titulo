
<?php 



require_once('../../../conexion.php');
session_start();

if (!isset($_SESSION["rol"])) {
  header('location: ../../login.php');
} else if (!$_SESSION['rol'] == 2 || !$_SESSION['rol'] == 1 )   {
    header('location: ../../login.php');
  }


// use the connection here


$consulta = $pdo->query('SELECT * from institucion  where codigo =2020;');
$admin = $pdo->query('SELECT * FROM `permisos` where id=2 or id=6 ');
$resultado= $consulta->fetchall();
$resul= $admin->fetchall();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../../../estilos_formulario_registro.css">
	<link rel="shortcut icon" href="../../../iconos/justicie.PNG" type="image/x-icon">
	<link rel="stylesheet" href="../../../formularios/form2.css">
	<link rel="stylesheet" href="../../../estilos_index.css">

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

    <title>Registro de Usuarios</title>
  
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
				<a href="#inicio" >	<img src="../../../img/fondos/uwu2.png"   alt=" " style="width:100%;"></a>
			
			</div>

			<div class="item">
				<a href="#inicio">	<img src="../../../img/fondos/fondo2.png"  alt="" style="width:100%;"></a>
			
			</div>

			<div class="item">
			<a href="#inicio">	<img src="../../../img/fondos/martillo.png"  alt="" style="width:100%;"></a>
			
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


	
	<ul class=" nav justify-content-center mt-20" style="background-color:#8059F5">
<li class="nav-item">
<img src="../../../iconos/pdi.jpg " width="60" class="mb-4 mt-4" alt="">
</li>
  <li class="nav-item">
  
    <a class="nav-link active mb-4 mt-4 ms-5 text-white "   aria-current="page" href="#">INICIO</a>
  </li>

  <li class="nav-item mb-4 mt-4">
  <a class="nav-link text-white"  href="../../../salir.php"><i class="fas fa-user-times"></i> CERRAR  SESION</a>
  </li>
  <li class="nav-item mb-4 mt-4 ">
		     	<a class="nav-link text-white" href="javascript:history.back()" name="volver">VOLVER ATRAS </a>

            </li>
  <li class="nav-item mb-4 mt-4 ">
  <a class="nav-link text-white" href="#"><i class="fas fa-balance-scale"></i></i> PREVCRIM</a>
  </li>
</ul>






<div class="container">
<div class="row">

<div class="col-10 col-md-12 mt-4 mb-4" id="colum1">
		
<form id="formulario"  class="form-style-9">
<h3 class="mt-3" id="inicio">Registrar Usuario</h3>




<label>rut (sin espacios ni letras  y con guion)</label>
<input type="text"pattern="\d{3,8}-[\d|kK]{1}" name="rut" minlength="9" maxlength="10" autocomplete="off"  class="form-control"   placeholder="ej:19420189-3" required/>


<label>Password</label>
<input type="password"  name="pass"  autocomplete="off"  minlength="5"  maxlength="50" class="form-control" required />
<label>nombres</label>
<input type="text" name="nombres" pattern="[A-Za-z ]+" autocomplete="off" minlength="5"  maxlength="50"  class="form-control" required  />
<label>apellidos</label>
<input type="text" name="apellidos" pattern="[A-Za-z ]+" autocomplete="off"  minlength="5"   maxlength="50"  class="form-control"  required/>

<label>Nombre institucion</label>


<select name="nombre_institucion"   id="" class="form-control">
<?php 
foreach($resultado as $row){
?>
 <option value="<?php echo $row['codigo'] ?> "><?php echo $row['nombre_ins']?></option>
<?php
}
?>
</select>

<label>fecha de habilitacion</label>
<input type="date" name="fecha_habilitacion" autocomplete="off"  class="form-control"  min="2010-01-01" max="2021-12-31" />


<label>Permisos</label>
<select name="permisos" id="" class="form-control">
<?php 
foreach($resul as $row2){
?>
 <option value="<?php echo $row2['id']?>"><?php echo $row2['nombre']?></option>
<?php
}
?>
</select>

<button type="submit" class="btn btn-primary mt-3" >Registrar</button>


<div class="mt-3 " id="respuesta" >
				
					
					
				</div>
</form>
</div>

<div class="col-10 col-md-6 mt-4 mb-4" id="colum2">
				<img src="../../../img/user.png" alt="">

			</div>
			<div class=" col-10 col-md-6 mt-4 mb-4" id="colum3">
				<h3>Registra el nombre de un nuevo usuario para una institucion asignandole permisos segun la funcion que va a desmpeñar</h3>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	<script >
var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');
formulario.addEventListener('submit', function(e){
    e.preventDefault();
    

    var datos = new FormData(formulario);
   // console.log(datos.get('comuna'))

 
   fetch('../../../formularios_guardar/guardar_usuario.php',{

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
	else if(data==='rutvalido'){
        respuesta.innerHTML= `
         <div class="alert alert-danger" role="alert">
            el rut es valido							
         </div>
         `
     }

	 else if(data==='rutinvalido'){
        respuesta.innerHTML= `
         <div class="alert alert-danger" role="alert">
            el rut es invalido							
         </div>
         `
     }
	

    
    else if(data==='registrada'){
       respuesta.innerHTML= `
        <div class="alert alert-danger" role="alert">
		Usuario ya registrado - debe ingresar otro rut					
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