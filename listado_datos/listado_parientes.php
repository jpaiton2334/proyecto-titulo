<?php 
require('../conexion.php');


// use the connection here

$sth = $pdo->query(' SELECT parientes.id_pariente, delincuente.nombres, delincuente.apellidos,parentesco.nombre_parentesco
FROM parientes,delincuente,parentesco
WHERE parientes.id_delincuente = delincuente.id AND
parentesco.id_parentesco = parientes.id_parentesco;');


$sth1 = $pdo->query('SELECT delincuente.id, delincuente.id
FROM parientes,delincuente
WHERE parientes.id_delincuente2 = delincuente.id 
;');

$resultado = $sth->fetchall();
$resultado2 = $sth->fetchall();

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Vistos por comuna</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
    
  <body> 
     <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a href="javascript:history.back()"><button class="btn btn-light">Volver Atrás</button> </a>    

    <!-- <a class="navbar-brand" href="../index.php"><i class="fas fa-home"></i>Inicio</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      
        <li class="nav-item dropdown">
         
        </li>
      </ul>
    </div>
  </div>
</nav>
     <h1 class="text-center text-light">REGISTROS</h1>
         <h2 class="text-center text-light">Listado  de delincuentes por comuna  <span class="badge badge-warning"></span></h2> 
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
                                <th>Id_pariente</th>
                               <th>Nombres</th>
                               <th>Apellidos</th>
                               <th>Parentesco</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($resultado as $row ) { 
                        
                            ?>
                                   
                            <tr>
                                <td><?php  echo $row['id_pariente'] ?></td>
                                <td><?php  echo $row['nombres'] ?></td>
                                <td><?php echo $row['apellidos']?></td>
                                <td><?php echo $row['nombre_parentesco']?></td>
                             
                            </tr>
                            
                               
                        <?php
                        }
                        ?>  
                                 
                        </tbody>        
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      
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
