<?php if ($_POST) {
    session_start();
    require('conexion.php');

    if (isset($_SESSION['rol'])) {
        switch ($_SESSION['rol']) {
            case 1:
                header('location:index.php');
                break;
                case 2:
                    header('Location:admin_zona_pdi.php');
                    break;
                case 3:

                    header('Location:index.php');
                    break;
                case 4:
                    header('Location:admin_zona_os10.php');
                    break;
                case 5 :
                    header('Location:usuario/carabinero/usuario_carabinero.php');
                    break;
                case 6:
                    header('Location:usuario_pdi.php');
                    break;
                case 7:
                    header('Location:usuario_os10.php');
                    break;
                default:
        }
    }

  
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $username = $_POST['user'];
        $pass = $_POST['pass'];
        
      
       

       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $query = $pdo->prepare("SELECT * FROM usuario where rut= :rut and
       pass =:pass");

       $query->execute(['rut'=>$username,'pass'=>$pass]);
       
  
       $row = $query->fetch(PDO::FETCH_NUM);
         if ($row == true) {
           $rol = $row[7];
           $_SESSION['rol'] = $rol;

            switch ($_SESSION['rol']) {
                case 1 :
                    header('location:index.php');
                    break;
                case 2:
                    header('Location:admin_zona_pdi.php');
                    break;
                case 3:

                    header('Location:index.php');
                    break;
                case 4:
                    header('Location:admin_zona_os10.php');
                    break;
                case  5  :
                    header('Location:usuario/carabinero/usuario_carabinero.php');
                    break;
                case 6:
                    header('Location:usuario_pdi.php');
                    break;
                case 7:
                    header('Location:usuario_os10.php');
                    break;
                default:
            }
        }else{
            echo  '<script type="text/javascript">
            alert("usuario o contraseña incorrectas");
            
            </script>';
        }

    }
    
}
?>




<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acceso</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />


  <style>

:root{
  --main-bg:#0404B4;
}

.main-bg {
  background: var(--main-bg) !important;
}

input:focus, button:focus {
  border: 1px solid var(--main-bg) !important;
  box-shadow: none !important;
}

.form-check-input:checked {
  background-color: var(--main-bg) !important;
  border-color: var(--main-bg) !important;
}

.card, .btn, input{
  border-radius:0 !important;
}

  </style>
</head>

<body class="main-bg">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Ingreso al sistema</h2>
            <img src="img/icono-policia.png" width="100" alt="">
          </div>
          <div class="card-body">
            <form action="#" method="POST">
              <div class="mb-4">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" name="user" class="form-control" required id="username" />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password"  name="pass" class="form-control" required id="password" />
              </div>
              <div class="mb-4">
                <input type="checkbox" class="form-check-input" id="remember" />
                <label for="remember" class="form-label">Recuerdame</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn text-light main-bg">Acceso</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-light text-center text-lg-start mt-3">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #08088A;color:aliceblue;">
    © 2021, Si tienes problemas con la pagina comunicate con :
    <a class="" style="color:(38, 218, 36);" href="mailto:jpabloperaltacasanova@gmail.com"> jpabloperaltacasanova@gmail.com</p></a>
  </div>
  
  <!-- Copyright -->
</footer>
</body>

</html>