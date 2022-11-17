<?php

require 'conexion_useradmin.php';



  if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $records = $conn->prepare('SELECT id, email, password, nombres, access FROM usuarios WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    

    session_start();


    if (isset($results['email']) && (($results['access']== 1) && password_verify($_POST['password'],$results['password'],))) {
      header("Location: libreria.php");
      $_SESSION['username'] = $results['nombres'];
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['user_access'] = $results['access'];
      $_SESSION['user_email'] = $results['email'];} 
      
     
     else {
      $message = '!!Lo Sentimos Las Credenciales No Coinciden!!';
    }

    
  }

?>