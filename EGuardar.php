<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $solicitante = $_POST['Solicitante'];
  $destino = $_POST['Adestino'];
  $origen = $_POST['Aorigen'];
  $titulo = $_POST['Titulo'];
  $descripcion = $_POST['Descripcion'];
  $prioridad = $_POST['Prioridad'];
  
  
  
// No olvides Prioridad y estado son integer o sea solo resiven valores numericos enteros 
  $query = "INSERT INTO solicitud(Solicitante,Adestino,Aorigen,Titulo,Descripcion,Prioridad) VALUES ('$solicitante','$destino','$origen','$titulo','$descripcion','$prioridad')";

  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Fallido Guardar.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: EHacerSoli.php');

}

?>