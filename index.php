<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagenes/logo-fis.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CASOTAS</title>
</head>
<body>
  
</body>
</html>
<?php

  if (isset($_SESSION['user_id'])) {
    header('Location: /index.php');
  }
  require 'db.php';

  if (!empty($_POST['Nombre']) && !empty($_POST['Pass'])) {
    $records = $conn->prepare('SELECT IDUsuario, Nombre, Pass FROM usuario WHERE Nombre = :Nombre');
    $records->bindParam(':Nombre', $_POST['Nombre']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['Pass'], $results['Pass'])) {
      $_SESSION['user'] = $results['id'];
      header("Location:index.php");
    } else {
      $message = 'La Cosas no coinciden ';
    }
  }
  session_destroy();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CASOTAS INC </title>
      <link rel="stylesheet" href="css/styleL.css">
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Casotas  </h1>
    <h1>INC<h1>
        
		<form action='login_do.php' method="post">
   


		<input type="text" placeholder="Nombre" name='txt_nombre'>



			<input type="password" placeholder="Contraseña" name='txt_pass'>
			<button type="submit" name="login">Login</button>
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
