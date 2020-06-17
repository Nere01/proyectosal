
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ver Solicitudes</title>
</head>
<body>
  
</body>
</html><?php include("db.php"); ?>

<?php
	require('valida.php');
		
	?>
<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-1">
    
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php  } ?>
     
      <?php 
         
         if (isset($_SESSION['nombre_usuario'])) {
           
           $Nombre = $_SESSION['nombre_usuario'] ;
           $Departamento = $_SESSION['Departamento_usuario'];
 
          
         } else {
           ;
         }
      ?>
      <!-- ADD TASK FORM -->
      
    </div>
    <div class="col-md-11">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Solicitante</th>
            <th>Para</th>
            <th>De Area</th>
            <th>Titulo</th>
            <th>Prioridad Solicitante</th>
            <th>Fecha</th>
            <th>Respuesta</th>
            <th>Estado</th>
            <th>Prioridad Del Area</th>
            <th>Visto</th>
            <th>Ver Mas</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          $query = "SELECT * FROM solicitud where Adestino = '$Departamento' and Estado='En Proceso' ORDER BY Fecha DESC ";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { 
            $prioridad = $row['Prioridad'] ;
            ?>
          <tr>
            <td><?php echo $row['Solicitante']; ?></td>
            <td><?php echo $row['Adestino']; ?></td>
            <td><?php echo $row['Aorigen']; ?></td>
            <td><?php echo $row['Titulo']; ?></td>
            <?php if($prioridad == 'Alta') {
Echo '<td style="background-color:red;">'.$prioridad.'</td>';
}elseif($prioridad == 'Baja') 
{
    Echo '<td style="background-color:green;">'.$prioridad.'</td>';
}elseif($prioridad=='Media'){
  Echo '<td style="background-color:orange;">'.$prioridad.'</td>';
}
 ?>
            <td><?php echo $row['Fecha']; ?></td>
            <td><?php echo $row['Respuesta']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td><?php echo $row['PrioVerdadera']; ?></td>
            <td><?php echo $row['Visto']; ?></td>
            <td>
              <a href="AVerEditar.php?IDSolicitud=<?php echo $row['IDSolicitud']?>" class="btn btn-outline-success">
                <i class="fas fa-marker"></i>
              </a>
              
              
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>