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
	  //require('valida2.php');
		
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
            <th>Arquitecto</th>
            <th>informacion</th>
            <th>Encargado</th>
            <th>fecha</th>
            <th>Pagar</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          // aqui es donde muestro nada mas mis busquedas 
          $query = "SELECT * FROM contrato where terminado = 0  " ;
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idcontrato']; ?></td>
            <td><?php echo $row['arquitecto']; ?></td>
            <td><?php echo $row['info']; ?></td>
            <td><?php echo $row['encargado']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td>
              <a href="pagar.php?id=<?php echo $row['idcontrato']?>" class="btn btn-success">
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