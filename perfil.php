<?php
session_start();
if (isset($_SESSION['Nombre'])) {
	echo "";
}else{
	header("Location: index.html");
	exit();
}
echo "Bienvenido ".$_SESSION['Nombre']."<br>
<a href='control/cerrar.php'>SALIR</a>";
?>