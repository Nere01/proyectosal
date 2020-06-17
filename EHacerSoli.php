<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hacer Solicitud</title>
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
          echo "<h7>RECURSOS HUMANOS </h7>";
           echo "<h5>Bienvenido " . $_SESSION['nombre_usuario'] . "\t<h5>";
           echo "<h7>Contrata Empleado  </h7>";
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
        <form action="GuardarEmp.php" method="POST">
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
          
        
          
         
          <div class="form-group">
            
          </div>
          
          <div class="form-group">
             <!-- combo  Box  -->
          
      
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <!--Comienzan las opciones -->
    
    <!--Termian las opciones-->
    <div class="col-md-8">

    <div class="form-check form-check-inline" action = "ASolicitudes.php" method = "GET" >
  
</div>
<div class="form-check form-check-inline">
 
</div>
<div class="form-check form-check-inline">
 
</div>
<div class="form-check form-check-inline">
  
</div>



      <table class="table-responsive">
      <div id="tablas_SoliG"> </div>
          
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>