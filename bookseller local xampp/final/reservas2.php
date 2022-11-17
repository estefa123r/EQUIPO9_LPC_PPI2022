<?php  include("includes/conexion_useradmin.php");?>
<?php include("includes/cabecera.php"); ?> 
<?php include("includes/conexion_bd.php");?> 

<?php  
if(($_SESSION['user_access'])  != 1 ) {
    header ("location:index.php?page=1&ipp=15");}
?>

<?php

if($_GET){
    
    // borrar informacion de base de datos 

    $id=$_GET['borrar'];
    $objconexion= new conexion();
    $sql="DELETE FROM `reservas` WHERE `reservas`.`id` =".$id;
    $objconexion->ejecutar($sql); 

}

$objconexion= new conexion();
$proyectos=$objconexion->consultar("SELECT * FROM `reservas`");
 ?>
    
    
<br/>
        <div class="row">
        <div class="col-md-4">
        <table class="table">
    </div>
    <thead>
        <tr>
            </div>
            <th>Libro Numero</th>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Celular</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>


        <?php foreach($proyectos as $proyecto) { ?>
   
        <tr>
            <td><?php echo $proyecto['identificador']; ?></td>
            <td><?php echo $proyecto['nombre']; ?></td>
            <td><?php echo $proyecto['cedula']; ?></td>
            <td><?php echo $proyecto['celular']; ?></td>
            <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>
        </tr>
        
        <?php } ?>
       
    </tbody>
</table>

        </div>
    </div>




<?php include("includes/pie.php");?> 