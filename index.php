<?php

session_start();

 if(!isset($_SESSION["rol"])){
   header('location: login.php');


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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Informacion de delincuentes</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
    
  <body> 
     <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <i class="fas fa-home"></i> Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
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
           
            <li><a class="dropdown-item" href="formularios/registrar_sector.php">Asignar sector</a></li>
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
            

          </ul>
        </li>

        <li class="nav-item">
        
          <a class="nav-link" href="formularios/registro_usuario.php"> <i class="fas fa-user-plus"></i> Registrar usuario</a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="salir.php"><i class="fas fa-user-times"></i> Cerrar sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><i class="fas fa-balance-scale"></i></i> PREVCRIM</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
     <h1 class="text-center text-light bg-dark">Pagina Principal</h1>
         <h2 class="text-center text-light ">Bienvenido <?php $_SESSION["rol"] ?> <span class="badge badge-warning"></span></h2> 
     </header>    

     <img src="img/fuerza.jpg" class="img-fluid" alt="...">
    <!-- <div style="height:50px"></div>
     

    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">    
                        
                 
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                               <th>Delito</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($resultado as $row) { ?>
                            <tr>
                                <td><?php  echo $row['nombres'] ?></td>
                                <td><?php  echo $row['nombre'] ?></td>
                            </tr>
                            
                               
                        <?php }?>                    
                        </tbody>        
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>     -->
    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>
