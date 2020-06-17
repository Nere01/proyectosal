<?php

include("db.php");

if(isset($_GET['IDUsuario'])) {
  $id = $_GET['IDUsuario'];
  $query = "DELETE FROM usuario WHERE IDUsuario = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se Elimino Correctamente ';
  $_SESSION['message_type'] = 'danger';
  header('Location: AUsuario.php');
}

?>
