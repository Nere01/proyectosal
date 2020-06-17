<?php
session_start();

	$pass=$_POST['txt_pass'];
	echo $pass;
	$user=$_POST['txt_nombre'];
	echo $user;

	$conecta=mysqli_connect("localhost","root","","ANGELES") or die ("No te puedes conectar");
	$query = "SELECT * FROM usuario WHERE Nombre = '$user' AND Pass ='$pass'";
	$resultado=mysqli_query($conecta,$query) or die (mysqli_error());
	
	
	if ($row = $resultado->fetch_assoc()) {


		
			$_SESSION['id_usuario'] = $row['IDUsuario'];
			$_SESSION['u_usuario'] = $row['Nombre'];
			header("Location: AUsuario.php");
	}
		
	else 
	{
		header("Location: index.php");
	}

	if (!$query) {
	    printf("Error: %s\n", mysqli_error($conn));
	    exit();
	}


?>