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
                case 5:
                    header('Location:usuario_carabinero.php');
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

       $query->execute(['rut'=>$username,'pass'=>$hash]);
       
       if (password_verify($pass, $hash)) {
        echo '¡La contraseña es válida!';
    } else {
        echo 'La contraseña no es válida.';
    }
       $row = $query->fetch(PDO::FETCH_NUM);
         if ($row == true) {
           $rol = $row[7];
           $_SESSION['rol'] = $rol;

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
                case 5:
                    header('Location:usuario_carabinero.php');
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
            echo "usuario o pass incorrecto";
        }

    }
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuarios</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
            padding: 16px;
        }
    </style>
  
</head>

<body>

    <form action="#" method="POST">
        <h3>Sistema</h3>
        <div class="mb-3">
            <label for="txt1"> Ingrese su rut</label>
            <input type="" name="user" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="txt1" class="form-label"> Ingrese su contraseña</label>
            <input type="password" name="pass" class="form-control" required>
        </div>
        <input type="submit" name="" value="Ingresar" class="btn btn-primary">
    </form>
</body>

</html>