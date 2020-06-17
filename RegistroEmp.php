<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TROPP</title>
</head>
<body>
  
</body>
</html>
<?php
  require 'db.php';

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>trop logistic </title>
      <link rel="stylesheet" href="css/styleL.css">
</head>

<body>
  <div class="wrapper">
	<div class="container">
	<h2>Registro en tropp </h2>
    <h2>logistic<h2>
    <h2>Empresa<h2>
        
	<form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Nombre de la empresa" autofocus> 
          </div>
         
          <div class="form-group">
            <input name="description" rows="2" class="form-control" placeholder="contraseña">
            <!-- combo  Box  -->
            <div Style = Display:none>
            <select name="Tipo" >

<option value="3">Empresa</option>
          </select>
            <!-- combo  Box  -->
            </div>

         
         <!-- comodines  -->
         <div Style = Display:none>
         <div class="form-group">
            <input type="text" name="materno" class="form-control" value = "1" placeholder="RFC" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="paterno" class="form-control" value = "1" placeholder="telefono" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="Departamento" class="form-control" value = "1" placeholder="Codigo Postal" autofocus> 
          </div>
         </div>





          <!-- comodines  -->
          <div class="form-group">
            <input type="text" name="rfc" class="form-control" placeholder="RFC" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="telefono" class="form-control" placeholder="telefono" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="postal" class="form-control" placeholder="Codigo Postal" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="estado" class="form-control" placeholder="Estado" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="direccion" class="form-control" placeholder="Direccion" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="correo" class="form-control" placeholder="correo" autofocus> 
          </div>



                <h6>verifique informacion </h6>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </form>
        
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
    <li></li>
		<li></li>
		<li></li>
		<li></li>
    <li></li>
		<li></li>
		<li></li>
		<li></li>
    <li></li>
    <li></li>
		<li></li>
		<li></li>
		<li></li>
		
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>