<?php
session_start();
include('db.php');

    $idem = $_GET['IDSolicitud'];
  
  $empresa = $_POST['empresa'];
  $estado = $_POST['estado'];
  $telefono = $_POST['telempresa'];
  $fecha = $_POST['fecha'];
  $auto = $_POST['auto'];
  $carga = $_POST['carga'];
  $id = $_SESSION['IDUsuario'];
  $Nombre = $_SESSION['nombre_usuario'] ;


  $query = "UPDATE carga set coche = '$auto', idtransportista = '$id', aceptado = 2,transportista ='$Nombre' WHERE idcarga='$idem'";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: EVerSolicitudes.php');



?>