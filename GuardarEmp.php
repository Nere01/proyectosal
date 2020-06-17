<?php

include('db.php');


  $nombre = $_POST['nombre'];
  $edad = $_POST['edad'];
  $fecha = $_POST['fecha'];

  
  
  
// No olvides Prioridad y estado son integer o sea solo resiven valores numericos enteros 
  $query = "INSERT INTO empleados(nombre,edad,nacimiento) VALUES ('$nombre','$edad','$fecha')";

  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Fallido Guardar.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: EHacerSoli.php');



?>