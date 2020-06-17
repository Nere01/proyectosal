<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Usuarios</title>
</head>
<body>
  
</body>
</html>
<?php include("db.php"); ?>
<?php
	require('valida.php');
		
	?>

<?php include('includes/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      
      <?php 
         
          if (isset($_SESSION['nombre_usuario'])) {
            echo "Bienvenido " . $_SESSION['nombre_usuario'] . "\t";
            echo "<h4>Guardar auto</h4>";
            $Nombre = $_SESSION['nombre_usuario'] ;
  
           
          } else {
            ;
          }
       ?>
      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="guardarauto.php" method="POST">
          <div class="form-group">
          <div class="form-group">
            <input type="text" name="nombre" value=""class="form-control" placeholder="Nombre Completo"autofocus>
          </div>
          <div class="form-group ">
            <input type="text" name="edad" value=""class="form-control" placeholder="Edad" autofocus>
          </div>
         
          
          <div class="form-group">
          <h5>Fecha de nacimiento</h5>
            <input type="date" name="fecha"  class="form-control"  autofocus>
          </div>
       

          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Folio</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Fecha nacimiento</th>
            <th>pagado</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          // aqui es donde muestro nada mas mis busquedas 
          $query = "SELECT * FROM empleados " ;
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idempleado']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['nacimiento']; ?></td>
            <td><?php echo $row['pagado']; ?></td>
            <td>
              <a href="eliminarauto.php?id=<?php echo $row['idempleado']?>" class="btn btn-success">
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
