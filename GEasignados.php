<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ver Empleados Asigandos</title>
</head>
<body>
  
</body>
</html>
<?php include("db.php"); ?>
  <?php
	  require('valida3.php');
		
	?>



<?php include('includes/Gheader.php'); ?>

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
      <?php } ?>
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
    <h5>LISTA DE EMPLEADOS DE CONTRATO<h5>
      <table class="table table-bordered">
        <thead>
          <tr>
            
            
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EDAD</th>
            <th>Fecha Nacimiento</th>
            <th>Contrato</th>
            <th>Pagado</th>
          
            
          </tr>
        </thead>
        <tbody>

          <?php 
          $id = $_GET['ID'];
          $query = "SELECT * FROM empleados  where contrato = '$id' ";
          $result_tasks = mysqli_query($conn, $query);    
      
          while($row = mysqli_fetch_assoc($result_tasks)) {
            
            ?>
          <tr>
            <td><?php echo $row['idempleado']; ?></td>
            
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['nacimiento']; ?></td>
            <td><?php echo $row['contrato']; ?></td>
            <td><?php echo $row['pagado']; ?></td>
           
           
           
            
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>