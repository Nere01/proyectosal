<?php

include("db.php");

if(isset($_GET['IDSolicitud'])) {
  $id = $_GET['IDSolicitud'];
  $query = "DELETE FROM solicitud WHERE IDSolicitud = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: ASolicitudes.php');
}

?>