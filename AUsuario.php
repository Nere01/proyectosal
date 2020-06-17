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
            $Nombre = $_SESSION['nombre_usuario'] ;
  
           
          } else {
            ;
          }
       ?>
      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Nombre" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="Departamento" class="form-control" placeholder="Departamento" autofocus> 
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="contraseña"></textarea>
            <!-- combo  Box  -->
            Selecciona el Tipo de Usuario 
            <select name="Tipo" >
<option value="1">Administrador</option>
<option value="2">Encargado</option>
<option value="3">General</option>
          </select>
            <!-- combo  Box  -->
              
        
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Pass</th>
            <th>IDUsuario</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          // aqui es donde muestro nada mas mis busquedas 
          $query = "SELECT * FROM usuario " ;
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Pass']; ?></td>
            <td><?php echo $row['IDUsuario']; ?></td>
            <td><?php echo $row['Tipo']; ?></td>
            <td><?php echo $row['Estado']; ?></td>
            <td>
              <a href="edit.php?IDUsuario=<?php echo $row['IDUsuario']?>" class="btn btn-success">
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
