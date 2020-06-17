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
    <h2>Transportista<h2>
        
	<form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Nombre" autofocus> 
          </div>
         
          <div class="form-group">
            <input name="description" rows="2" class="form-control" placeholder="contraseña">



            <!-- combo  Box  -->
            
            <select name="Tipo" >

<option value="2">Transportista</option>

          </select>
            <!-- combo  Box  -->
                  <!-- comodines  -->
         <div Style = Display:none>
         <div class="form-group">
            <input type="text" name="rfc" class="form-control" value = "1" placeholder="RFC" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="telefono" class="form-control" value = "1" placeholder="telefono" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="correo" class="form-control" value = "1" placeholder="Codigo Postal" autofocus> 
          </div>
         </div>

          <!-- comodines  -->





        <h6>Apellidos</h6>
          </div>
          <div class="form-group">
            <input type="text" name="paterno" class="form-control" placeholder="Paterno" autofocus> 
          </div>
          <div class="form-group">
            <input type="text" name="materno" class="form-control" placeholder="Materno" autofocus> 
          </div>
          <h6>Direccion</h6>


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
          <h6>Confirme informacion </h6>
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