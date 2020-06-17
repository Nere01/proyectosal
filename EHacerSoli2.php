<!DOCTYPE html>
<html lang="es">
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include("db.php"); 


include('includes/Gheader.php'); 

?>
<script src="filtroE.js"></script>


<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      
      <?php   ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
	  
	 
	  
	  
       <form action="EGuardar.php" method="POST">
       	Área de Servicio
          <div class="form-group">
            <select name="Adestino" class="form-control" autofocus>
			<option value="Abastecimiento" selected> Abastecimiento </option>
			<option value="Asistente de Direccion"> Asistente de Direccion </option>
			<option value="Contabilidad"> Contabilidad </option>
			<option value="Coordinacion"> Coordinacion </option>
			<option value="Laboratorio"> Laboratorio </option>
			<option value="Mantenimiento"> Mantenimiento </option>
			<option value="Mercadotecnia"> Mercadotecnia </option>
			<option value="Recursos Humanos"> Recursos Humanos </option>
			<option value="Seguros"> Seguros </option>
			<option value="Sistemas"> Sistemas </option>
			</select>
          </div>
          <div class="form-group">
            <input type="text" name="Aorigen" class="form-control" placeholder="Área solicitante" autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="Titulo" class="form-control" placeholder="Asunto" autofocus required>
          </div>
          <div class="form-group">
             <!-- combo  Box  -->
             Prioridad 
             <select name="Prioridad" size="3" required>

<option value ="ALTA">ALTA </option>

<option value="NORMAL" selected>NORMAL</option>

<option value="BAJA">BAJA </option>
	
            <!-- combo  Box  -->
          </div>
          <div class="form-group">
		 
          </div>
          <div class="form-group">
            <textarea name="Descripcion" rows="2" class="form-control" placeholder="Servicio Solicitado" required></textarea>
			
	
			
			
		
          </div>
          <input type="submit" name="send" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>



    <div class="col-md-8">

<div class="form-check form-check-inline"  >
<input class="form-check-input" type="radio" name="Filtro" id="Filtro" value="Abiertas" checked ="checked">
<label class="form-check-label" for="inlineRadio1">Pendientes</label>
</div>
<div class="form-check form-check-inline"  >
<input class="form-check-input" type="radio" name="Filtro" id="Filtro" value="Nueva">
<label class="form-check-label" for="inlineRadio1">Nueva</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="Filtro" id="Filtro" value="Leida" >
<label class="form-check-label" for="inlineRadio3">Vista</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="Filtro" id="Filtro" value="Realizada" >
<label class="form-check-label" for="inlineRadio2">Realizada</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="Filtro" id="Filtro" value="Cancelada" >
<label class="form-check-label" for="inlineRadio3">Cancelada</label>
</div>



    
      <table class="table-responsive">
      <div id="tablas_SoliG"> </div>
       
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>