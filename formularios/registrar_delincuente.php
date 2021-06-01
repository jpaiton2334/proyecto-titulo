<?php
require('../conexion.php');

session_start();
if (!isset($_SESSION["rol"])) {
    header('location: login.php');
} else {
    if ($_SESSION['rol'] != 1) {
        header('location: login.php');
    }
}
$consulta = $pdo->query('SELECT * from institucion;');
$consulta2 = $pdo->query('SELECT * from estado;');
$consulta3 = $pdo->query('SELECT * from comuna;');

$resultado = $consulta->fetchall();
$resultado2 = $consulta2->fetchall();
$resultado3 = $consulta3->fetchall();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos_formulario_registro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Delincuente</title>
    <style>
        form {

            width: 50%;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand color-green" href="usuario_carabinero.php">
    <a class="navbar-brand" href="../index.php"><i class="fas fa-home"></i>Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         f en el chatart
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../listado_delincuentes.php">f en el chat</a></li>
          
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container">
        <div class="row ">
      
           
            <h3 class="mt-3">Registrar delincuente</h3>
            <form method="post" action="../formularios_guardar/guardar_delincuente.php" enctype="multipart/form-data" id="formulario">
                <div class="mt-3"><label>rut (sin espacios ni letras y con guion)</label>
                    <input type="text" pattern="[0-9-]+" name="rut" autocomplete="off" minlength="5" maxlength="13" class="form-control" required placeholder="ej:19420189-3" />
                </div>
                <div class="mt-3">
                    <label>nombres</label>
                    <input type="text" name="nombres" pattern="[A-Za-z ]+" autocomplete="off" minlength="5" maxlength="50" class="form-control" required />
                </div>
                <div class="mt-3">
                    <label>apellidos</label>
                    <input type="text" name="apellidos" pattern="[A-Za-z ]+" autocomplete="off" minlength="5" maxlength="50" class="form-control" required />
                </div>
                <div class="mt-3">
                    <label>apodo</label>
                    <input type="text" name="apodo" pattern="[A-Za-z ]+" autocomplete="off" minlength="5" maxlength="50" class="form-control" required />
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
                    <input type="text" pattern="[0-9-]+" name="telefono" autocomplete="off" minlength="5" maxlength="13" class="form-control" required placeholder="ej: 22234344554" />
                </div>
                <label>celular</label>
                <input type="text" pattern="[0-9-]+" name="celular" autocomplete="off" minlength="5" maxlength="13" class="form-control" required placeholder="ej: 934543345" />
                <div class="mt-3">
                    <label>email</label>
                    <input type="email" name="email" autocomplete="off" minlength="5" maxlength="50" class="form-control" required />
                </div>
                <div class="mt-3">
                    <label>fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" autocomplete="off" class="form-control" required />
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
                    <input class="btn btn-primary mt-3" type="submit" name="enviar" value="Registrar">
                </div>
            </form>
     
    </div>
    </div>
    <?php
    if (
        isset($_POST['rut']) && isset($_POST['nombres']) && isset($_POST['apellidos'])
        && isset($_POST['apodo']) && isset($_POST['domicilio'])
        && isset($_POST['telefono']) && isset($_POST['celular'])
        && isset($_POST['email']) && isset($_POST['fecha_nacimiento'])
        && isset($_POST['estado'])
        && isset($_POST['permisos']) && isset($_POST['imagen'])
    )
        require_once('../conexion.php');


    ?>

   <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../validacion_formulario.js"></script>
</body>

</html>