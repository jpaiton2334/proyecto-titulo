<?php

$link = 'mysql:host=localhost;dbname=prevcrim';
$user = 'root';
$pass ='';

try {
    $pdo = new PDO($link, $user, $pass);
  // echo 'conectado';

   

} catch (PDOException $e) {
    print "¡Error!:";
    exit;
}
return $pdo;