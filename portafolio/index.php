<?php
 include("cabecera.php");
 
//bs5-jumbotron-default
?>
<?php include("conexion.php");?>
<?php
$objconexion= new conexion();
$proyectos=$objconexion->consultar("SELECT * FROM `proyectos`");

?>


<div class="row align-items-md-stretch">
    <div >
        <div
            class="h-100 p-5 text-white bg-primary border rounded-3">
            <h2>Bienvenid@</h2>
            <p>Este es un portafolio privado </p>
            <button class="btn btn-outline-primary" type="button">Example button</button>
        </div>
    </div>
    
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($proyectos as $proyecto) {?>
  <div class="col">
    <div class="card h-100">
      <img src="imagenes/<?php echo $proyecto['Imagen']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['Nombre']; ?></h5>
        <p class="card-text"><?php echo $proyecto['Descripcion']; ?></p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary"></small>
      </div>
    </div>
  </div>
  <?php } ?>
</div>

