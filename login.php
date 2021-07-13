

<?php if ($_POST) {
    session_start();
    require('conexion.php');

   if (isset($_SESSION['rol'])) {
       switch ($_SESSION['rol']) {
           case 1:
               header('location:index.php');
               break;
                case 2:
                    header('Location:zona/zona_pdi/admin_zona_pdi.php');
                    break;
                case 3:

                    header('Location:zona/zona_carabinero/admin_zona_carabineros.php');
                    break;
                case 4:
                    header('Location:zona/zona_ciudadana/admin_zona_ciudadana.php');
                    break;
                case 5:
                    header('Location:usuario/carabinero/usuario_carabinero.php');
                     break;
                 case 6:
                     header('Location:usuario/pdi/usuario_pdi.php');
                    break;
                case 7:
                    header('Location:usuario/s_ciudadana/s_ciudadana.php');
                    break;
                 default:
         }
     }

  
    if (isset($_POST['user'])) {
        $username = $_POST['user'];
        $pass = $_POST['pass'];
        
       $sql= "SELECT * FROM usuario where rut=?";
       $result = $pdo->prepare($sql);
       $result->bindParam(1,$username);
       $result->execute();

        
     
       $row = $result->fetch();
      if(!$row || $row<1 ){

        echo "<script>
        alert('Usuario incorrecto');
        window.location= 'login.php'
        </script>";
     
     
     
     

      }
     
      if(password_verify($pass,$row['pass'] )){
          $rol = $row[7];
          $_SESSION['rol'] = $rol;

           switch ($rol) {
               case 1:
                   header('location:index.php');
                   break;
               case 2:
                   header('Location:zona/zona_pdi/admin_zona_pdi.php');
                   break;
               case 3:
                   header('Location:zona/zona_carabinero/admin_zona_carabineros.php');
                   break;
               case 4:
                   header('Location:zona/zona_ciudadana/admin_zona_ciudadana.php');
                   break;
               case 5:
                   header('Location:usuario/carabinero/usuario_carabinero.php');
                   break;
               case 6:
                   header('Location:usuario/pdi/usuario_pdi.php');
                   break;
               case 7:
                   header('Location:usuario/s_ciudadana/s_ciudadana.php');
                   break;
               default:
          
               echo('user o pass invalido');
             
       
          
     
 }

         }else{
           
                echo('<script type="text/javascript">
                alert("contraseña incorrecta");
               </script>');
             
         
           
    }
    }
}
?>


<html lang="en">

<head>
 <link rel="shortcut icon" href="iconos/justice.PNG" type="image/x-icon">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Login Form</title>
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
  <style>
      :root{
  --main-bg:#180B50;
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
  
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Ingreso al sistema</h2>
           
            <img src="img/icono-policia.png" width="150"  alt="">
            
         
          </div>
          <div class="card-body">
            <form method="POST" action="login.php">
          
              <div class="mb-4">
                <label for="username" class="form-label">Rut</label>
                <input type="text"   name="user" class="form-control" id="username" required />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="pass" class="form-control" id="password" required />
              </div>
              <div class="mb-4">
                <input type="checkbox" class="form-check-input" id="remember" />
                <label for="remember" class="form-label">Recordar</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn text-light main-bg">Acceder</button>
              </div>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html> 





