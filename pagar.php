<?php
//session_start();
include('db.php');

    $id = $_GET['id'];
  
 
 


  $query = "UPDATE contrato SET terminado = 1 Where idcontrato= $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: AHacerSoli.php');



?>