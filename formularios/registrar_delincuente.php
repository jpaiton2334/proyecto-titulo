<?php
require('../conexion.php');

session_start();
if (!isset($_SESSION["rol"])) {
  header('location: ../../login.php');
} else if (!$_SESSION['rol'] == 5 || !$_SESSION['rol'] == 1 )   {
    header('location: ../../login.php');
  }


$consulta = $pdo->query('SELECT * from institucion;');
$consulta2 = $pdo->query('SELECT * from estado ;');
$consulta3 = $pdo->query('SELECT * from comuna;');

$resultado = $consulta->fetchall();
$resultado2 = $consulta2->fetchall();
$resultado3 = $consulta3->fetchall();


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
    <title>Registrar Delincuente</title>
    
</head>

<body>
<!-----carrusel de imagenes--->
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

<!---- fin-carrusel de imagenes--->

<!---- inicio nav--->
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
<!---- fin nav--->


    <div class="container">
        <div class="row ">
        <div class="col-10 col-md-12 mt-4 mb-4" id="colum1">
            <form id="formulario"  class="form-style-9"   >
            <h3 class="mt-3" id="inicio">Registrar delincuente</h3>
                <div class="mt-3"><label>rut (sin espacios ni letras y con guion)</label>
                    <input type="text" pattern="\d{3,8}-[\d|kK]{1}" name="rut"  autocomplete="off" minlength="8" maxlength="10" class="form-control" required placeholder="ej:19420189-3" />
                
				</div>
                <div class="mt-3">
                    <label>nombres</label>
                    <input type="text" name="nombres"   pattern="[A-Za-z-ñ ]+" autocomplete="off" minlength="5" maxlength="50" class="form-control" required />
                </div>
                <div class="mt-3">
                    <label>apellidos</label>
                    <input type="text" name="apellidos" pattern="[A-Za-z-ñ ]+" autocomplete="off" minlength="5" maxlength="50" class="form-control" required />
                </div>
                <div class="mt-3">
                    <label>apodo</label>
                    <input type="text" name="apodo" pattern="[A-Za-z-ñ ]+" autocomplete="off" minlength="4" maxlength="50" class="form-control" required />
                </div>
                <div class="mt-3">
                    <label>Comuna</label>
                    <select name="domicilio" id="" class="form-control">
                        <?php
                        foreach ($resultado3 as $row3) {
                        ?>
                            <option value="<?php echo $row3['id'] ?>"><?php echo $row3['nombre'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mt-3">
                    <label>telefono</label>
					
                    <input type="text" pattern="[0-9-]+" name="telefono" autocomplete="off" minlength="9" maxlength="9" class="form-control" required placeholder="ej: 2 2755 6006" />
                </div>
                <label>celular</label>
                <input type="text" pattern="[0-9-]+" name="celular" autocomplete="off" minlength="9" maxlength="9" class="form-control" required placeholder="ej: 934543345" />
                <div class="mt-3">
                    <label>email</label>
                    <input type="email" name="email" autocomplete="off" minlength="5" maxlength="50" class="form-control" required />
                </div>
                <div class="mt-3">
                    <label>fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" autocomplete="off" class="form-control"  min="1940-01-01" max="2021-12-31" required />
                </div>

                <div class="mt-3">
                    <label>Estado</label>
                    <select name="estado" id="" class="form-control">
                        <?php
                        foreach ($resultado2 as $row2) {
                        ?>
                            <option value="<?php echo $row2['id'] ?>"><?php echo $row2['nombre'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

           
                <div class="mt-3">
                    <label>Ingresado por la institucion</label>
                    <select name="permisos" id="" class="form-control">
                        <?php
                        foreach ($resultado as $row) {
                        ?>
                            <option value="<?php echo $row["codigo"] ?>"><?php echo $row['nombre_ins'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
               

                <div class="mt-3">
                    <label>Foto del delincuente</label>
                    <input class="input-group" type="file" name="imagen" accept="image/*" />
                </div>


                <div class="mt-3">
                    <!-- boton de enviar formulario -->
					<button type="submit" class="btn btn-success mt-3" >Enviar</button>
                </div>




				<div class="mt-3 " id="respuesta" >
				
					
					
					</div>
            </form> <!-- fin del formulario -->
            </div>
            <div class="col-10 col-md-6 mt-4 mb-4" id="colum2">
				<img src="../img/offender.png" alt="">

			</div>
			<div class=" col-10 col-md-6 mt-4 mb-4" id="colum3">
				<h3>Registra un nuevo delincuente con todos los datos importantes y adjunta una fotografia del inputado</h3>

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

<script src="js/RutValidador.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/funciones.js"></script>
	<script >
var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');
formulario.addEventListener('submit', function(e){
    e.preventDefault();
    

    var datos = new FormData(formulario);
   // console.log(datos.get('comuna'))

 
   fetch('../formularios_guardar/guardar_delincuente.php',{

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
    }else if(data==='largo'){
        respuesta.innerHTML= `
         <div class="alert alert-danger" role="alert">
            nombre demaciado largo							
         </div>
         `
     }
    
    else if(data==='registrada'){
       respuesta.innerHTML= `
        <div class="alert alert-danger" role="alert">
		delincuente ya registrado - debe ingresar otro rut					
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