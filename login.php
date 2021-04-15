<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuarios</title>
    <style>
        body{font-family:Arial,Helvetica, sans-serif;}
        form{border:3px solid #f1f1f1; padding: 16px;}
    </style>
</head>
<body>
    <form action="login.php" method="post">
    <h3>Login de usuarios</h3>
    <label for="txt1">Usuario</label>
    <input type="" name="t1" required>
    <br>
    <br>
    <label for="txt1">Password:</label>
    <input type="" name="t2" required>
    <br>
    <input type="submit" name="" value="Ingresar">
    </form>
</body>
<?php if($_POST){
    session_start();
    require('conexion.php');
    $u = $_POST['t1'];
    $p = $_POST['t2'];
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM usuario where rut= :u and
    pass =:p");
    $query->bindParam(":u",$u);
    $query->bindParam(":p",$p);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if( $usuario){
        $_SESSION['usuario'] = $usuario['rut'];
        header('Location:pagina_segura.php');
    }else{
        echo "usuario y pass son invalidos";

    }
}
    ?>
</html>