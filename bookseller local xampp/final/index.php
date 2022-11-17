<?php include("includes/cabecera.php");  ?> 
<?php include("includes/conexion_bd.php"); ?> 
<?php include("includes/conexion_useradmin.php"); ?>
<?php include_once('includes/paginador.php'); 
  $pages	=	new Paginator();
?>

<?php 
$objconexion= new conexion();
?>

<?php

	$condition	=	'';
	if (isset($_REQUEST['nombre']) and $_REQUEST['nombre'] != "") {
		$condition	.=	' AND nombre LIKE "%' . $_REQUEST['nombre'] . '%" ';
	}

	$pages->default_ipp	=	15;
	$sql 	= $objconexion->consultar("SELECT * FROM libros WHERE 1 " . $condition . "");
	$pages->items_total	=	count($sql);
	$pages->mid_range	= 7;
	$pages->paginate();

	$proyectos	=   $objconexion->consultar("SELECT * FROM libros WHERE 1 " . $condition . " ORDER BY id DESC " . $pages->limit . "");

	?>

<div class="p-1 mb-1 bg-secondary text-white ">
    <div class="container">
    <p class="display-4 text-success" style="text-align:center"> <img  src="imagenes/logo1.png">  </p>                                                         
        <hr class="my-2">
        

<nav class="navbar bg-secondary text-white">
  <div class="container-fluid ">
    <a class="navbar-brand text-white">Libreria The Bookseller</a>
    <form class="d-flex" role="search" method="GET">
      <input class="form-control me-2" type="search" placeholder="Buscar Libro"  name="nombre">
      <button class="btn btn-outline-success" type="submit" name="enviar">Buscar</button>
    </form>
  </div>
</nav>
</div>
</div>
<br/>


<div class="row row-cols-1 row-cols-md-3 g-4">
  
  <?php foreach($proyectos as $proyecto) { ?>

    <a class="col" href="plantilla.php?id=<?php echo $proyecto['id']?>" style="text-decoration:none ; color: #000000;" >
      <div class="card">
        <img width="300" height="350" src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="..." if(true){}>
        <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
        <p class="card-text"><?php echo $proyecto['genero']; ?></p>
        </div>
      </div>
  </a>

    <?php } ?>

    
</div>
<br/>

<a class="btn btn-secondary" type="button" href="Importante.php">Instrutivo de Uso</a>

   <br/>
<br/>
<div class="row marginTop">
			<div class="col-sm-12 paddingLeft pagerfwt">
				<?php if ($pages->items_total > 0) { ?>
					<?php echo $pages->display_pages(); ?>
					<?php echo $pages->display_items_per_page(); ?>
					<?php echo $pages->display_jump_menu(); ?>
				<?php } ?>
			</div>
		</div>

    
    <br/>
<?php include("includes/pie.php");?>  

