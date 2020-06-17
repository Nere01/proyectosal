<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Estado solicitud</title>
</head>
<body>
  
</body>
</html>
<?php
include("db.php");
$empresa = '';
$estado= '';

$telefono= '';
$transportista= '';
$fecha= '';
$auto= '';
$descripcion= '';



if  (isset($_GET['IDSolicitud'])) {
  $id = $_GET['IDSolicitud'];
  $query = "SELECT * FROM carga WHERE idcarga=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $empresa = $row['empresa'];
    $estado = $row['estado'];
    $telefono = $row['telempresa'];
    $fecha = $row['fecha'];
    $auto = $row['coche'];
    $carga = $row['carga'];
  
    
    $querys = "UPDATE carga set  aceptado = '2' WHERE idcarga=$id";
mysqli_query($conn, $querys);
  }
}

if (isset($_POST['update'])) {
  $row = mysqli_fetch_array($result);
  $empresa = $row['empresa'];
  $estado = $row['estado'];
  $telefono = $row['telempresa'];
  $fecha = $row['fecha'];
  $auto = $row['auto'];
  $carga = $row['carga'];


  $query = "UPDATE solicitud set Solicitante = '$solicitante', Adestino = '$destino', Aorigen = '$origen',Titulo = '$titulo', Descripcion = '$descripcion', Prioridad = '$prioridad', Estado = '$Terminado',PrioVerdadera = '$PrioVerdadera',Respuesta = '$Respuesta' WHERE IDSolicitud=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Accion realizada';
  $_SESSION['message_type'] = 'warning';
  header('Location: EVerSolicitudes.php'); // Esta es la aprte en la que se manda  de vuelta a la principal de operaciones
}

?>
<?php include('includes/Eheader.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="guardarCarga.php?IDSolicitud=<?php echo $_GET['IDSolicitud']; ?>" method="POST">
        <div class="form-group">
          Empresa
          <input name="empresa" type="text" class="form-control" value="<?php echo $empresa; ?>" placeholder="Quien solicita" readonly >
          Estado
          <input name="estado" type="text" class="form-control" value="<?php echo $estado; ?>" placeholder="Destino de la Peticion" readonly onmousedown="return false;">
          Telefono de la empresa
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Origen de la peticion"readonly onmousedown="return false;">
          
          
          transportista
          <input name="transportista" type="text" class="form-control" value="<?php echo $transportista; ?>" placeholder="Mi Prioridad"readonly onmousedown="return false;">
          fecha de emision
          <input name="fecha" type="text" class="form-control" value="<?php echo $fecha; ?>" placeholder="Estado" readonly onmousedown="return false;">
          Auto a usar 
          <select name="auto" size="6">

<option value ="carro">Carro</option>

<option value="troca">Troca</option>

<option value="Camion">Camion</option>
	
</select>
          
        </div>
        <div class="form-group">
          Descripcion de la carga
        <textarea name="carga" readonly onmousedown="return false;"  class="form-control" cols="30" rows="10"><?php echo $carga;?></textarea>
        
        
      
         
        </div>
        <button class="btn-success" name="update">
          Aceptar
</button>
      </form>
      <form action="EVerSolicitudes.php" >
      <button class="btn btn-danger">Cancelar</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>