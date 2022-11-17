<?php include("includes/cabecera.php"); ?> 
<?php include("includes/conexion_bd.php");?> 

<?php 
$id = $_GET["id"];
$objconexion= new conexion();
$query = "SELECT * FROM libros WHERE id=".$id;
$proyectos=$objconexion->consultar($query)
?>
  
<div class="row row-cols-1 row-cols-md-1 g-0">
  <?php foreach($proyectos as $proyecto) { ?>
    <div class="card mb-3"  >
  <div class="row g-1">
    <div class="col-md-4">
    <img width="640" height="480" src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="..." if(true){}>
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h2  class="title"> <b> Libro: </b> <?php echo $proyecto['nombre']; ?></h2>
      <h2  class="title"> <b> Numero del Libro: </b> <?php echo $proyecto['id']; ?></h2>
      <br/>
      <h3 class="text"> <b> Autor: </b> <?php echo $proyecto['autor']; ?></h3>
      <h3 class="text"> <b> Genero: </b> <?php echo $proyecto['genero']; ?></h3>
      <h3 class="text"> <b> Descripción : </b>  <?php echo $proyecto['descripcion']; ?></h3>
      <h3 class="text"> <b> Año : </b>  <?php echo $proyecto['ano']; ?></h3>
      <h3 class="text"> <b> Editorial : </b>  <?php echo $proyecto['editorial']; ?></h3>
      <br/>
      <h3 class="text"> <b> Precio x 8 Dias: </b> <?php echo '$'.number_format($proyecto['precio']); ?></h3>
      </div>
    </div>
  </div>
</div>
   
<a class="btn btn-secondary" type="button" href="reservas.php">Reservar Libro</a>

<?php } ?>
        

    </div> 

        <br/>
      <?php include("includes/pie.php");?> 

      