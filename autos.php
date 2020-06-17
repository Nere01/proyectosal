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
           
           echo "<h5>Estos son tus autos  </h5>";
           echo "<h7>deseas agregar uno?  </h7>";
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
        <form action="EGuardarE.php" method="POST">
          <div class="form-group">
            <input type="text" name="transportista" value="<?php echo $Nombre;?>" class="form-control" placeholder="Solicitante"readonly onmousedown="return false;" autofocus>
          </div>
          <div class="form-group "Style = Display:none>
            <input type="text" name="id" value="<?php echo $id; ?>"class="form-control" placeholder="id"readonly onmousedown="return false;" autofocus>
          </div>
         
          <div class="form-group">
            
          </div>
        
          <div class="form-group">
             <!-- combo  Box  -->
             Selecciona el auto a usar 
          <select name="auto" >

                      <option value="troca">troca</option>
                      <option value="carro">carro</option>
                      <option value="camion">camion</option>
          </select>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <!--Comienzan las opciones -->
    
    <!--Termian las opciones-->
    <div class="col-md-8">

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



      <table class="table-responsive">
      <div id="tablas_SoliG"> </div>
          
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>