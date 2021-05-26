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
    <a class="navbar-brand" href="../index.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           listado de delincuentes 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../listado_delincuentes.php">delincuentes por alfabeto</a></li>
            <li><a class="dropdown-item" href="comuna_delincuente.php">delincuentes por comuna</a></li>
            <li><a class="dropdown-item" href="../ultima_ves_visto.php">delincuente ultima ves visto</a></li>
            <li><a class="dropdown-item" href="../listado_fechas_especificas.php">Listado por fechas especificas</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
         <h3 class="text-center text-primary">Listado comunas<span class="badge badge-warning"></span></h3> 
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
                              <th>funciones</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($resultado as $row) { ?>
                            <tr>
                                <td><?php  echo $row['id'] ?></td>
                                <td><?php  echo $row['nombre'] ?></td>
                              
                                <td>
                              <a href="#edit_<?php echo $row['id']; ?>" class='btn btn-success btn-sm' data-toggle='modal'
                              ><i class="fas fa-user-edit"></i></span> Editar</a>
                              <a href='#delete_<?php echo $row['id'];?>'class='btn btn-danger btn-sm' data-toggle='modal'
                              ><i class="far fa-trash-alt"></i> Borrar</a>
                              </td>
                            </tr>
                            <?php include('../modal/edit_delete_comunas.php'); ?>
                               
                        <?php }?>                    
                        </tbody>        
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    


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

    <!-- <script>
     $(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
   -->
  </body>
</html>
