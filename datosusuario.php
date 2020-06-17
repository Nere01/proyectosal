<?php
//session_start();
include('db.php');
  $id = $_POST['id'];
  $telefono = $_POST['telefono'];
  $licencia = $_POST['licencia'];
  $vencimiento = $_POST['vencimiento'];
  $correo = $_POST['correo'];
 
  $query = "UPDATE usuario set telefono = '$telefono', licencia = '$licencia', vencimiento = '$vencimiento',correo ='$correo' WHERE IDUsuario='$id'";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: misdatos.php');
  ?>