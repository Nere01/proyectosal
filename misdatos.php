<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>mis datos</title>
</head>
<body>
  
</body>
</html>
<?php include("db.php"); ?>
<?php
	require('valida2.php');
		
	?>


<?php include('includes/Eheader.php'); ?>
<script src="filtroE.js"></script>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
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
           echo "<h5>Hola  " . $_SESSION['nombre_usuario'] . "\t<h5>";
           echo "<h7>Por favor termine de llenar sus datos  </h7>";
           $Nombre = $_SESSION['nombre_usuario'] ;
           $Departamento = $_SESSION['Departamento_usuario'];
           $materno = $_SESSION['materno'];
           $paterno = $_SESSION['paterno'];
           $postal = $_SESSION['postal'];
           $estado = $_SESSION['estadoi'];
           $ciudad = $_SESSION['ciudad'];
           $direccion = $_SESSION['direccion'];
           $telefono = $_SESSION['telefono'];
           $correo = $_SESSION['correo'];
           $id = $_SESSION['IDUsuario'];
         
 
           
         } else {
           ;
         }
      ?>
      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="datosusuario.php" method="POST">
          <div class="form-group">
            <input type="text" name="transportista" value="<?php echo $Nombre ?>"class="form-control" placeholder="Solicitante"readonly onmousedown="return false;" autofocus>
          </div>
          <div class="form-group "Style = Display:none>
            <input type="text" name="id" value="<?php echo $id; ?>"class="form-control" placeholder="id"readonly onmousedown="return false;" autofocus>
          </div>
         
          
          <div class="form-group">
          <h5>Celular</h5>
            <input type="text" name="telefono" value="0" class="form-control" placeholder="Celular"  autofocus>
          </div>
          <div class="form-group">
          <h5>No de licencia</h5>
            <input type="text" name="licencia" value="0" class="form-control" placeholder="Licencia"  autofocus>
          </div>
          <div class="form-group">
          <h5>fecha de vencimiento</h5>
            <input type="date" name="vencimiento" value="0000-00-00" class="form-control" placeholder=""  autofocus>
          </div>
          <div class="form-group">
          <h5>Correo</h5>
            <input type="text" name="correo" value="0" class="form-control" placeholder="Correo"  autofocus>
          </div>
         
         
        
      
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <!--Comienzan las opciones -->
    
    <!--Termian las opciones-->
    <div class="col-md-8">





    <table class="table table-bordered">
        <thead>
          <tr>
            
            
            <th>Nombre</th>
            <th>licencia</th>
            <th>vencimiento</th>
            <th>correo</th>
            <th>Telefono</th>
          
          </tr>
        </thead>
        <tbody>

          <?php 
          $query = "SELECT * FROM usuario  where IDUsuario = '$id' ";
          $result_tasks = mysqli_query($conn, $query);    
      
          while($row = mysqli_fetch_assoc($result_tasks)) {
             
            ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            
            <td><?php echo $row['licencia']; ?></td>
            <td><?php echo $row['vencimiento']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            
           <?php 
         
           ?>
           
           
        
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>