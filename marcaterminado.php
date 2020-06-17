<?php
//session_start();
include('db.php');

    $id = $_GET['ID'];
  
  


  $query = "UPDATE empleados set  pagado = 1  WHERE idempleado='$id'";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: miscargas.php');



?>