<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Solicitudes</title>
</head>
<body>
  
</body>
</html>
<?php include("db.php"); ?>

<?php
	require('valida.php');
		
	?>

<?php include('includes/header.php'); ?>

<script src="filtro.js"></script>

<main class="container p-4">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->

      
      

      <!-- ADD TASK FORM -->
     
    </div>
    <div class="col-md-10">
      <table class="table table-bordered">
        <thead>
        <div class="form-check form-check-inline" action = "ASolicitudes.php" method = "GET" >
  <input class="form-check-input" type="radio" name="Filtro" id="Filtro" value="" checked ="checked">
  <label class="form-check-label" for="inlineRadio1">Todos</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Filtro" id="Filtro" value="Terminado" >
  <label class="form-check-label" for="inlineRadio2">Terminado</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Filtro" id="Filtro" value="0" >
  <label class="form-check-label" for="inlineRadio3">Cancelado</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Filtro" id="Filtro" value="En Proceso" >
  <label class="form-check-label" for="inlineRadio3">En Proceso</label>
</div>


<div class= "table-responsive">
        <div id="tablas_Soli"> </div>
          </div>
          
          <?php  ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>