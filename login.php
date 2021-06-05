<?php 
   session_start();
   
    // if (isset($_SESSION['rol'])) {
    //     switch ($_SESSION['rol']) {
    //         case 1:
    //             header('location:index.php');
    //             break;
    //             case 2:
    //                 header('Location:admin_zona_pdi.php');
    //                 break;
    //             case 3:

    //                 header('Location:index.php');
    //                 break;
    //             case 4:
    //                 header('Location:admin_zona_os10.php');
    //                 break;
    //             case 5 :
    //                 header('Location:usuario/carabinero/usuario_carabinero.php');
    //                 break;
    //             case 6:
    //                 header('Location:usuario_pdi.php');
    //                 break;
    //             case 7:
    //                 header('Location:usuario_os10.php');
    //                 break;
    //             default:
    //     }
    // }

       
  
        $username  =htmlentities(addslashes($_POST['user']));
        $password  =htmlentities(addslashes($_POST['pass']));
        
      //  $contador = 0;
        require('conexion.php');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql= "SELECT * FROM usuario where rut = :rut";
       $resultado =$pdo->prepare($sql);
     
       $resultado->execute(array(':rut'=>$username));
       
       while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        echo "Usuarios:".$registro['rut']."contraseña".$registro['pass']."<br>";

        var_dump($registro['pass']);
        if(password_verify($password,$registro['pass'])){
        echo "usuario registrado";
        }else{
          echo "usuario no registrado";
        }
       }
       
      //  if($contador > 0){
      //    echo "usuario encontrado";
      //  }else{
      //    echo "no hay";
         
      //  }
      //  $resultado->closeCursor();
  
      //  $row = $query->fetch(PDO::FETCH_NUM);
        //  if ($registro == true) {
        //    $rol = $registro[7];
        //    $_SESSION['rol'] = $rol;

        //     switch ($_SESSION['rol']) {
        //         case 1 :
        //             header('location:index.php');
        //             break;
        //         case 2:
        //             header('Location:admin_zona_pdi.php');
        //             break;
        //         case 3:

        //             header('Location:index.php');
        //             break;
        //         case 4:
        //             header('Location:admin_zona_os10.php');
        //             break;
        //         case  5  :
        //             header('Location:usuario/carabinero/usuario_carabinero.php');
        //             break;
        //         case 6:
        //             header('Location:usuario_pdi.php');
        //             break;
        //         case 7:
        //             header('Location:usuario_os10.php');
        //             break;
        //         default:
        //     }
        // }else{
        //     echo  '<script type="text/javascript">
        //     alert("usuario o contraseña incorrectas");
            
        //     </script>';
        // }

    
    

?>




