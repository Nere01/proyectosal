
<?php
include("db.php");


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuario WHERE IDUsuario=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['Nombre'];
    $telefono = $row['telefono'];
    $correo = $row['correo'];
    $postal = $row['postal'];
    $estado = $row['estadoi'];
    $materno = $row['materno'];
    $paterno = $row['paterno'];
   
    
  }
}



?>
<?php include('includes/Gheader.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="AVerEditar.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <h2>Esta es la informacion para que puedas comunicarte</h2>
        <div class="form-group">
          Nombre
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre.' '.$paterno.' '.$materno; ?>" placeholder="Quien solicita" readonly onmousedown="return false;">
          Codigo Postal
          <input name="postal" type="text" class="form-control" value="<?php echo $postal; ?>" placeholder="Destino de la Peticion" readonly onmousedown="return false;">
          Celular
          <input name="celular" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Origen de la peticion"readonly onmousedown="return false;">
          Estado
          <input name="" type="text" class="form-control" value="<?php echo $estado; ?>" placeholder="Titulo"readonly onmousedown="return false;">
          correo
          <input name="correo" type="text" class="form-control" value="<?php echo $correo; ?>" placeholder="Prioridad"readonly onmousedown="return false;">
          
          
        </div>
        
     
      </form>
      <form action="GSolicitudes.php" >
      <button class="btn btn-danger">Volver</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>