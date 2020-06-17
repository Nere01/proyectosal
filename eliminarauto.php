<?php
session_start();
include('db.php');

    $id = $_GET['id'];
  
 
 


  $query = "DELETE FROM empleados Where idempleado= $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: aautos.php');



?>