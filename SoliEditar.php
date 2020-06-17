
<?php
include("db.php");
$solicitante = '';
$destino= '';
$origen= '';
$titulo= '';
$descripcion= '';
$prioridad= '';
$estado= '';
$PrioVerdadera= '';
$Respuesta= '';

if  (isset($_GET['IDSolicitud'])) {
  $id = $_GET['IDSolicitud'];
  $query = "SELECT * FROM solicitud WHERE IDSolicitud=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $solicitante = $row['Solicitante'];
    $destino = $row['Adestino'];
    $origen = $row['Aorigen'];
    $titulo = $row['Titulo'];
    $descripcion = $row['Descripcion'];
    $prioridad = $row['Prioridad'];
    $estado = $row['Estado'];
    $PrioVerdadera = $row['PrioVerdadera'];
    $Respuesta = $row['Respuesta'];
    
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['IDSolicitud'];
  $solicitante = $_POST['Solicitante'];
  $destino = $_POST['Adestino'];
  $origen = $_POST['Aorigen'];
  $titulo = $_POST['Titulo'];
  $descripcion = $_POST['Descripcion'];
  $prioridad = $_POST['Prioridad'];
  $estado = $_POST['Estado'];
  $PrioVerdadera = $_POST['PrioVerdadera'];
  $Respuesta = $_POST['Respuesta'];

  $query = "UPDATE solicitud set Solicitante = '$solicitante', Adestino = '$destino', Aorigen = '$origen',Titulo = '$titulo', Descripcion = '$descripcion', Prioridad = '$prioridad', Estado = '$estado',PrioVerdadera = '$PrioVerdadera',Respuesta = '$Respuesta' WHERE IDSolicitud=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Accion realizada';
  $_SESSION['message_type'] = 'warning';
  header('Location: ASolicitudes.php'); // Esta es la aprte en la que se manda  de vuelta a la principal de operaciones
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="SoliEditar.php?IDSolicitud=<?php echo $_GET['IDSolicitud']; ?>" method="POST">
        <div class="form-group">
          Solicitante
          <input name="Solicitante" type="text" class="form-control" value="<?php echo $solicitante; ?>" placeholder="Quien solicita" readonly onmousedown="return false;" >
          Destino
          <input name="Adestino" type="text" class="form-control" value="<?php echo $destino; ?>" placeholder="Destino de la Peticion" readonly onmousedown="return false;">
          Origen
          <input name="Aorigen" type="text" class="form-control" value="<?php echo $origen; ?>" placeholder="Origen de la peticion"readonly onmousedown="return false;">
          Titulo
          <input name="Titulo" type="text" class="form-control" value="<?php echo $titulo; ?>" placeholder="Titulo"readonly onmousedown="return false;">
          Prioridad
          <input name="Prioridad" type="text" class="form-control" value="<?php echo $prioridad; ?>" placeholder="Mi Prioridad"readonly onmousedown="return false;">
          Estado
          <input name="Estado" type="text" class="form-control" value="<?php echo $estado; ?>" placeholder="Estado" readonly onmousedown="return false;">
          Prioridad Verdadera
          <input name="PrioVerdadera" type="text" class="form-control" value="<?php echo $PrioVerdadera; ?>" placeholder="Proridad del Departamento" readonly onmousedown="return false;">
        </div>
        <div class="form-group">
          Descripcion de la Peticion
        <textarea name="Descripcion" readonly onmousedown="return false;"  class="form-control" cols="30" rows="10"><?php echo $descripcion;?></textarea>
        'Respuesta'
        <textarea name="Respuesta" readonly onmousedown="return false;"   class="form-control" cols="30" rows="10"><?php echo $Respuesta;?></textarea>
        </div>
       
      </form>
      <form action="Asolicitudes.php" >
      <button class="btn btn-danger">Volver</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>