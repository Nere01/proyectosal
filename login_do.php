<?php
session_start();

if (empty($_POST['txt_nombre']) or empty ($_POST['txt_pass'])) {
  $men="Valores vacios, intentelo de nuevo.";
	echo "<script> alert('".$men."');document.location.href='index.php';</script>";
	die();
}
else {
  $clavee = $_POST['txt_nombre'];
  $passw = $_POST['txt_pass'];
  

  $conexion = mysqli_connect("localhost","root","","angeles") or die ("Error: servidor no encotrado.");
  $sql="SELECT Nombre, Pass, tipo, Departamento,materno,paterno,postal,estadoi,
  ciudad,direccion,rfc,telefono,correo,IDUsuario,licencia,vencimiento FROM usuario WHERE Nombre='$clavee' AND Pass='$passw' AND Estado != 'inactivo'";
  $resultado=mysqli_query($conexion,$sql) or die (mysqli_error());
  $consulta=mysqli_fetch_array($resultado);
  
  if ($consulta[0] != "") {
    echo "Loading...";
    $_SESSION['tipo_usuario'] = $consulta[2];
    $_SESSION['nombre_usuario'] = $consulta[0];
    $_SESSION['Departamento_usuario'] = $consulta[3];
    $_SESSION['materno'] = $consulta[4];
    $_SESSION['paterno'] = $consulta[5];
    $_SESSION['postal'] = $consulta[6];
    $_SESSION['estadoi'] = $consulta[7];
    $_SESSION['ciudad'] = $consulta[8];
    $_SESSION['direccion'] = $consulta[9];
    $_SESSION['rfc'] = $consulta[10];
    $_SESSION['telefono'] = $consulta[11];
    $_SESSION['correo'] = $consulta[12];
    $_SESSION['IDUsuario'] = $consulta[13];
    $_SESSION['licencia'] = $consulta[14];
    $_SESSION['vencimiento'] = $consulta[15];
    if ($consulta[2] == "1") {
      mysqli_close($conexion);
      header( "refresh:1;url=AUsuario.php" );
      if (($consulta[0]==$clavee) and ($consulta[1]==$passw))
			{
				
			
        $_SESSION['user']=1;
       
			
				
				//echo "Bienvenido  " . $user;
				
						
			}
	else	
	{
    $menn="Error en usuario y/o contrase;a.";
	echo "<script> alert('".$menn."');document.location.href='index.php';</script>";
		header("Location:index.php");
	}
    }
    else if ($consulta[2] == "2") {
      mysqli_close($conexion);
      header( "refresh:1;url=EHacerSoli.php" );
      if (($consulta[0]==$clavee) and ($consulta[1]==$passw))
			{
				
			
        $_SESSION['user']=2;
       
			
				
				//echo "Bienvenido  " . $user;
				
						
			}
	else	
	{
    $menn="Error en usuario y/o contrase;a.";
	echo "<script> alert('".$menn."');document.location.href='index.php';</script>";
		header("Location:index.php");
	}
    }
    else if ($consulta[2] == "3") {
      mysqli_close($conexion);
      header( "refresh:1;url=GHacerSoli.php" );
      if (($consulta[0]==$clavee) and ($consulta[1]==$passw))
			{
				
			
        $_SESSION['user']=3;
       
			
				
				//echo "Bienvenido  " . $user;
				
						
			}
	else	
	{
    $menn="Error en usuario y/o contrase;a.";
	echo "<script> alert('".$menn."');document.location.href='index.php';</script>";
		header("Location:index.php");
	}
    }
    
  }
  else {
    mysqli_close($conexion);
    $men="Valores vacios, intentelo de nuevo.";
	echo "<script> alert('".$men."');document.location.href='index.php';</script>";
    header( "refresh:2;url=index.php" );
  }

}
