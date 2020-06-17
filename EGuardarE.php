<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $trans = $_POST['transportista'];
  $postal = $_POST['postal'];
  $estado = $_POST['estado'];
  $ciudad = $_POST['ciudad'];
  $id = $_POST['id'];
  $auto = $_POST['auto'];
  $comentario = $_POST['comentario'];
  $fecha = '(Y-m-d)';

  
// No olvides Prioridad y estado son integer o sea solo resiven valores numericos enteros 
  $query = "INSERT INTO transporte(nombre,postal,estado,ciudad,coche,comentario,fecha,aceptado,empresa,idtransportista) 
  VALUES ('$trans','$postal','$estado','$ciudad','$auto','$comentario',CURRENT_DATE,1,0,'$id')";

  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Fallido Guardar.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: EHacerSoli.php');

}

?>