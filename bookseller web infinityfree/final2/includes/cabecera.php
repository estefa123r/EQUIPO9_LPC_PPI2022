<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Libreria The Bookseller</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="includes/estilo.css">


</head>

<body>

<?php session_start(); 
$arrays = $_SESSION;
?>
<?php foreach($arrays as $loggin) { ?>
<?php } ?>

<div class="container "> 
<ul class="nav nav-tabs bg-secondary" >

<li class="nav-item">
          <?php
          if (isset($_SESSION['user_access']) && ($_SESSION['user_access'] == 1)) {
            echo ('<a class="nav-link" href="index.php?page=1&ipp=15" style="color:white;">The Bookseller </a>');
          }
          ?>
        </li>
        </a>

  <li class="nav-item">
          <?php
          if (isset($_SESSION['user_access']) && ($_SESSION['user_access'] == 1)) {
            echo ('<a class="nav-link" href="libreria.php" style="color:white;">Libreria</a>');
          }
          ?>
        </li>
        </a>

        <li class="nav-item">
          <?php
          if (isset($_SESSION['user_access']) && ($_SESSION['user_access'] == 1)) {
            echo ('<a class="nav-link" href="reservas2.php" style="color:white;">Reservas Pendientes</a>');
          }
          ?>
        </li>
        </a>
        
  <li class="nav-item " >
  <?php
     if(($_SESSION)) {
    echo ('<a class = "nav-link " href="cerrar_Session.php" style="color:white;"> Cerrar Session</a>'); }
    ?>
  </li>
</ul>



