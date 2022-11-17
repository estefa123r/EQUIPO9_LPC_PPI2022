<?php
   // registro de nuevos usuarios Topacio.
  require 'conexion_useradmin.php';
  
   $message = '';  
 
   if (!empty($_POST['nombres']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
    $sql = "INSERT INTO usuarios (nombres, email, password, access) VALUES (:nombres, :email, :password, :access)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombres', $_POST['nombres']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':access', $_POST['access']);

    if ($stmt->execute()) {
      $message = '!!Nuevo Usuario creado con exito ya puedes ingresar con tu usuario y Contraseña en el Item Iniciar Session!!';
    } else {
      $message = '!!Lo Sentimos El Usuario No Pudo Ser Creado!!';
    }

  }
?>