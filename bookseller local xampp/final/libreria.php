<?php  include("includes/conexion_useradmin.php");?>
<?php include("includes/cabecera.php"); ?> 
<?php include("includes/conexion_bd.php");?> 

<?php  
if(($_SESSION['user_access'])  != 1 ) {
    header ("location:index.php?page=1&ipp=15");}
?>

<?php
// enviar valores a db
if (!empty($_POST['nombre']) && !empty($_POST['autor']) && !empty($_POST['genero']) && !empty($_POST['descripcion']) && !empty($_POST['ano']) 
&& !empty($_POST['editorial']) && !empty($_POST['precio']) ) {

$nombre=$_POST['nombre'];   
$autor=$_POST['autor'];
$genero=$_POST['genero'];
$descripcion=$_POST['descripcion'];
$fecha= new DateTime();
$imagen=$fecha->getTimestamp()."_".$_FILES['archivo']['name'];
$imagen_Temporal=$_FILES['archivo']['tmp_name'];
move_uploaded_file($imagen_Temporal,"imagenes/".$imagen);
$ano=$_POST['ano'];
$editorial=$_POST['editorial'];
$precio=$_POST['precio'];
$objconexion= new conexion();
$sql="INSERT INTO `libros` (`id`, `nombre`, `autor`, `genero`, `descripcion`, `imagen`, `ano`, `editorial`, `precio`) VALUES (NULL,'$nombre','$autor', '$genero','$descripcion','$imagen','$ano','$editorial','$precio');";
$objconexion->ejecutar($sql);
header ("location:libreria.php");
}

if($_GET){
    
    // borrar informacion de base de datos 

    $id=$_GET['borrar'];
    $objconexion= new conexion();
    $imagen=$objconexion->consultar("SELECT imagen FROM `libros` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);
    $sql="DELETE FROM `libros` WHERE `libros`.`id` =".$id;
    $objconexion->ejecutar($sql); 

}

$objconexion= new conexion();
$proyectos=$objconexion->consultar("SELECT * FROM `libros`");


    ?>
    <br/>
    <div class="card">
    <h3 style="text-align:center"> Registro de Libreria</h3>
</div>
<br/>

<!-- Button trigger modal -->
<div class="container">
    <div class="row">
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#registrarlibro">
  Registrar Nuenvo Libro
</button>
    </div>


<!-- Modal -->
<div class="modal fade" id="registrarlibro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="container">

    <div class="modal-header">
        Registrar Libro
    </div>
    <div class="modal-body">
    <form action="libreria.php" method="post" enctype="multipart/form-data">

    Nombre Del Libro: <input require class="form-control" type="text" name="nombre" id="">  
    <br/>
    Autor Del Libro: <input require class="form-control" type="text" name="autor" id="">
    <br/>
    Genero Del Libro: <select require class="form-control" type="text"  name="genero" id="">
    <option value="Alta Fantasia">Alta Fantasia</option>
    <option value="Anime">Anime</option>
    <option value="Aventura">Aventura</option>
    <option value="Ciencia Ficcion">Ciencia Ficcion</option> 
    <option value="Comedia">Comedia</option>
    <option value="Clasica">Clasica</option>
    <option value="Drama">Drama</option> 
    <option value="literatura erotica">literatura erotica</option>
    <option value="Historia">Historia</option>
    <option value="Infantin">Infantil</option>
    <option value="Literatura Fantastica">Literatura Fantastica </option>
    <option value="misterio">misterio</option>
    <option value="Musical">Musical</option>
    <option value="Novela">Novela</option>
    <option value="Romantico">Romantico</option>
    <option value="Suspenso">Suspenso</option>
    <option value="Tecnologia">Tecnologia</option>
    <option value="Terror">Terror</option>
    </select>
    <br/>
    Descripcion: <textarea require class="form-control" name="descripcion" id="" cols="30" rows="3"></textarea>
    <br/>
    Imagen: <input require class="form-control"  type="file" name="archivo" id="">
    <br/>
    Año de publicacion: <input require class="form-control" type="number" name="ano" id="">
    <br/>
    Editorial: <input require class="form-control" type="text" name="editorial" id="">
    <br/>
    Precio: <input  require class="form-control" type="number" value="5000" name="precio" id="">
    <br/>

    <div class="moda-footer">

        <input class= "btn btn-secondary" type="submit"   value="Enviar Datos">  
    </div>
   




</div>

    
  </div>
</div>





</div>
</div>
<br/>
        <div class="row">
        <div class="col-md-4">
        <table class="table">
    </div>
    <br/>
    <thead>
        <tr>
            </div>
            <th>ID</th>
            <th>Nombre</th>
            <th>autor</th>
            <th>genero</th>
            <th>descripcion</th>
            <th>imagen</th>
            <th>Año</th>
            <th>editorial</th>
            <th>precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>


        <?php foreach($proyectos as $proyecto) { ?>
   
        <tr>
            <td><?php echo $proyecto['id']; ?></td>
            <td><?php echo $proyecto['nombre']; ?></td>
            <td><?php echo $proyecto['autor']; ?></td>
            <td><?php echo $proyecto['genero']; ?></td>
            <td><?php echo $proyecto['descripcion']; ?></td>
            <td><img width="150 px" height="100 px" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="" sizes="" srcset=""></td>
            <td><?php echo $proyecto['ano']; ?> </td>
            <td><?php echo $proyecto['editorial']; ?></td>
            <td><?php echo '$'.number_format($proyecto['precio']); ?></td>
            <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>
        </tr>
        
        <?php } ?>
       
    </tbody>
</table>

        </div>
    </div>
</div>



<?php include("includes/pie.php");?> 