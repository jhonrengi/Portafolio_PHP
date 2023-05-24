<?php
    include("cabecera.php");
?>
<?php
    include("conexion.php");
?>
<?php


if($_POST){

    $nombre= $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fecha=new DateTime();

    $imagen= $fecha->getTimestamp()."_". $_FILES['archivo']['name'];

    $imagen_temporal=$_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

    $objconexion= new conexion();
    $sql = "INSERT INTO `proyectos` (`ID`, `Nombre`, `Imagen`, `Descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion')"; //trea informacion del sql
    $objconexion->ejecutar($sql);
    //redirecionar una pagina
    header("location:portafolio.php");


}

if($_GET){

    $id = $_GET['borrar'];
    //"DELETE FROM proyectos WHERE `proyectos`.`ID` = 7"
    $objconexion= new conexion();

    //Borrar imagen de la base de datos y la carpeta
    $imagen=$objconexion->consultar("SELECT imagen FROM `proyectos` WHERE ID=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);

    //Borrar datos de la base datos
    $sql="DELETE FROM proyectos WHERE `proyectos`.`ID` =".$id;
    $objconexion->ejecutar($sql);
    //redirecionar una pagina
    header("location:portafolio.php");



}

//Intruccion de consulta
$objconexion= new conexion();
$proyectos=$objconexion->consultar("SELECT * FROM `proyectos`");

//print_r($proyectos);

?>
<br>


<div class="container">
    <div class="row">
        <div class="col-4">
        <div class="card">
    <div class="card-header">
        Datos del proyecto
    </div>
    <div class="card-body">
    <form action="portafolio.php" method="post" enctype="multipart/form-data" >

Nombre del proyecto: <input require class="form-control" type="text" name="nombre" id="">
<br>
Imagen del proyecto: <input require  class="form-control" type="file" name="archivo" id="">
<br>
 Descripcion: <textarea require  class="form-control" name="descripcion" id= "" rows="3"></textarea>
 <br>
<input class="btn btn-success"type="submit" value="Enviar proyecto">

</form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
        </div>
        <div class="col-6">
        <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyectos as $proyecto) {?>
            <tr class="">
                <td ><?php echo $proyecto['ID']; ?></td>
                <td><?php echo $proyecto['Nombre']; ?></td>
                <td>
                    <img width ="100" src="imagenes/<?php echo $proyecto['Imagen']; ?>" alt="" srcset="">
                    
                
                </td>
                <td><?php echo $proyecto['Descripcion']; ?></td>
                <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['ID'];?>" role="button">Eliminar</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

        </div>
        
    </div>
</div>










