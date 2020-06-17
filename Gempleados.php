<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gerente</title>
</head>
<body>
  
</body>
</html>
<?php include("db.php"); ?>
<?php
	require('valida3.php');
		
	?>


<?php include('includes/Gheader.php'); ?>
<script src="filtroG.js"></script>

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
           echo "<h4 aling = 'center '>Gerente</h4>";
           echo "Bienvenido " . $_SESSION['nombre_usuario'] . "\t";
           echo "<h4 aling = 'center '>Asignar contrato</h4>";
           $Nombre = $_SESSION['nombre_usuario'] ;
           $Nombre = $_SESSION['nombre_usuario'] ;
           $Departamento = $_SESSION['Departamento_usuario'];
           $rfc = $_SESSION['rfc'];
           
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
        <form action="asignar.php" method="POST">
          <div class="form-group">
          <h5>Contrato</h5>
          Selecciona Contraro 
             <select name="idcontrato" id="idcontrato" required="">
             <?php
	
    
  $query = "SELECT * FROM contrato"; 
  $result_tasks = mysqli_query($conn, $query);    

  while($consulta = mysqli_fetch_assoc($result_tasks)) {
		extract($consulta);
		
		echo '<OPTION VALUE="'.$consulta['idcontrato'].'">'.$consulta['idcontrato'].'</OPTION>';

		}
?>
</select>
          </div>
    

         
          
          <div class="form-group">
          Selecciona Empleado para contrato
             <select name="idempleado" id="idempleado" required="">
             <?php
	
    
  $query = "SELECT * FROM empleados where contrato = 0"; 
  $result_tasks = mysqli_query($conn, $query);    

  while($consulta = mysqli_fetch_assoc($result_tasks)) {
		extract($consulta);
		
		echo '<OPTION VALUE="'.$consulta['idempleado'].'">'.$consulta['nombre'].'</OPTION>';

		}
?>
</select>
          </div>
       
         
          <div class="form-group">
            
          </div>
         
          <div class="form-group">
             <!-- combo  Box  -->
             
             
            
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar empleado">
        </form>
      </div>
    </div>
    <!--Comienzan las opciones -->
    
    <!--Termian las opciones-->
    



      <table class="table-responsive">
      <div id="tablas_SoliG"> </div>
          
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>