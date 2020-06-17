<?php
//session_start();
include('db.php');

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $Departamento = $_POST['Departamento'];
  $materno = $_POST['materno'];
  $paterno = $_POST['paterno'];
  $postal = $_POST['postal'];
  $estado = $_POST['estado'];
  $ciudad = $_POST['ciudad'];
  $direccion = $_POST['direccion'];
  $rfc = $_POST['rfc'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $Tipo = $_POST['Tipo'];
  $query = "INSERT INTO usuario(Nombre,Pass,Tipo,Departamento,materno,paterno,postal,estadoi,ciudad,direccion,rfc,telefono,correo) 
  VALUES ('$title', '$description','$Tipo','$Departamento','$materno','$paterno','$postal','$estado','$ciudad','$direccion','$rfc','$telefono','$correo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: AUsuario.php');

}

?>
