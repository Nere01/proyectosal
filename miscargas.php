<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ver Soliciutd</title>
</head>
<body>
  
</body>
</html>
<?php include("db.php"); ?>
  <?php
	  require('valida2.php');
		
	?>



<?php include('includes/Eheader.php'); ?>

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
           $id = $_SESSION['IDUsuario'];
 
          
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
          <th>Folio</th>
            
            <th>Nombre Empleado</th>
            <th>Edad</th>
            <th>Fecha Nacimeinto</th>
            <th>No de contrato</th>
            <th>Estado</th>
            <th>Pagar</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          $query = "SELECT * FROM empleados Where pagado = 0 or pagado = null  ";
          $result_tasks = mysqli_query($conn, $query);    
      
          while($row = mysqli_fetch_assoc($result_tasks)) {
            $situacion =$row['pagado'];
            ?>
          <tr>
            <td><?php echo $row['idempleado']; ?></td>
            
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['nacimiento']; ?></td>
            <td><?php echo $row['contrato']; ?></td>
            
           <?php 
           if ($situacion == 0){
            echo "<td>Sin Pagar</td>";
           }else {
            echo "<td> Pagado</td>";
           }
           ?>
           
           
           
            <td>
              <a href="marcaterminado.php?ID=<?php echo $row['idempleado']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              
              
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>