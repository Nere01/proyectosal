<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $contrato = $_POST['idcontrato'];
  $empleado = $_POST['idempleado'];
 
  
  
  
// No olvides Prioridad y estado son integer o sea solo resiven valores numericos enteros 
  $query = "UPDATE empleados SET contrato = '$contrato' Where idempleado = '$empleado'";

  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Fallido Guardar.");
  }

  $_SESSION['message'] = 'Se ha guardado todo';
  $_SESSION['message_type'] = 'primary';
  header('Location: AHacerSoli.php');

}

?>