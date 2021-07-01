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
             die();
       
          
     
 }
         }else{
           
                echo('<script type="text/javascript">
                alert("usuario o contraseña incorrectos");
               </script>');
           
         
           
    }
    }
}
?>

