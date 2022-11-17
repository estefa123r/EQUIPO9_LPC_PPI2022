<?php include("includes/cabecera.php"); ?> 
<?php include("includes/conexion_bd.php");?> 


<?php
// enviar valores a db
if (!empty($_POST['identificador']) && !empty($_POST['nombre']) && !empty($_POST['cedula']) && !empty($_POST['celular']) ) {

$id=$_POST['identificador'];   
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$celular=$_POST['celular'];
$objconexion= new conexion();
$sql="INSERT INTO `reservas` (`id`, `identificador`, `nombre`, `cedula`, `celular`) VALUES (NULL,'$id','$nombre', '$cedula','$celular');";
$objconexion->ejecutar($sql);
header ("location:reservas.php");
}


$objconexion= new conexion();
$proyectos=$objconexion->consultar("SELECT * FROM `reservas`");


    ?>
    <br/>
    <div class="card">
    <h3 style="text-align:center"> Reserva Tu Libro</h3>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-12">

        <div class="card">
    <div class="card-header">
        Reserva Tu Libro
    </div>
    <div class="card-body">
    <form action="reservas.php" method="post" enctype="multipart/form-data">

Numero del Libro: <input require class="form-control" type="number" name="identificador" id="">  
<br/>
Nombre del Usuario: <input require class="form-control" type="text" name="nombre" id="">
<br/>
Cedula del usuario: <input  require class="form-control" type="number" name="cedula" id="">
<br/>
Numero del Contacto: <input require class="form-control" type="tel" name="celular" id="">
<br/>

<input class="btn btn-secondary" type="submit" value="Enviar Datos">   <a class="btn btn-secondary" type="button" href="index.php?page=1&ipp=15">Regresar a la pagina Principal</a>         

        </div>
    </div>
</div>



<?php include("includes/pie.php");?> 