<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $empresa = $_POST['empresa'];
  $arqui = $_POST['arqui'];
  $info = $_POST['info'];
  $dinero = $_POST['dinero'];

  
// No olvides Prioridad y estado son integer o sea solo resiven valores numericos enteros 
  $query = "INSERT INTO contrato(encargado,arquitecto,info,fecha,dinero) 
  VALUES ('$empresa','$arqui','$info',CURRENT_DATE,'$dinero')";

  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Fallido Guardar.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: GHacerSoli.php');

}

?>