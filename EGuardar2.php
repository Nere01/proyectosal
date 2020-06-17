<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

include('db.php');

$usuariosesion = $_SESSION['nombre_usuario'];


if (isset($_POST['send'])) 
{
  $solicitante = $_POST['Solicitante'];
  $destino = $_POST['Adestino'];
  $origen = $_POST['Aorigen'];
  $titulo = $_POST['Titulo'];
  $descripcion = $_POST['Descripcion'];
  $prioridad = $_POST['Prioridad'];
  
  
  date_default_timezone_set("America/Chihuahua");
  $date = new DateTime();
  $fecha=$date->format('Y-m-d');
  $hora=$date->format('H:i');
// No olvides Prioridad y estado son integer o sea solo resiven valores numericos enteros 
  $query = "INSERT INTO solicitudes(personasolicita,areaservicio,areasolicita,asunto,servicio,prioridad,fechasolicitud,horasolicitud,estatusactual,respuesta) VALUES ('$usuariosesion','$destino','$origen','$titulo','$descripcion','$prioridad','$fecha','$hora','Nueva',' ')";

  $result = mysqli_query($data, $query);
  if(!$result) {
    die("Query Fallido Guardar.");
  }
 // $_SESSION['message'] = 'Se ha guardado todo';
  //$_SESSION['message_type'] = 'primary';
  header('Location: EHacerSoli.php');

}
///////////
$destino = $_POST['Adestino'];
			 if ($destino == "Mantenimiento")
            {
                $a = "vburrola@angelescuauhtemoc.com";
            }
            else if ($destino == "Sistemas")
            {
                $a = "jmadrid@angelescuauhtemoc.com";
            }
            else if ($destino == "Abastecimiento")
            {
                $a = "mledezma@angelescuauhtemoc.com";
            }
            else if ($destino == "Recursos Humanos")
            {
                $a = "grascon@angelescuauhtemoc.com";
            }
            else if ($destino == "Laboratorio")
            {
                $a = "darambula@angelescuauhtemoc.com";
            }
            else if ($destino == "Asistente de Direccion")
            {
                $a = "smarquez@angelescuauhtemoc.com";
            }
            else if ($destino == "Coordinacion")
            {
                $a = "sgonzalez@angelescuauhtemoc.com,ycastillo@angelescuauhtemoc.com";
            }
            else if ($destino == "Seguros")
            {
                $a = "seguros@angelescuauhtemoc.com";
            }
            else if ($destino == "Mercadotecnia")
            {
                $a = "evalenzuela@angelescuauhtemoc.com";
            }
            else if ($destino == "Contabilidad")
            {
                $a = "cenriquez@angelescuauhtemoc.com";
            }

//if (isset($_POST['send']))
			 {
				 
				 
				include("sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
				
				/*Configuracion de variables para enviar el correo*/
				$mail_username="resultados@angelescuauhtemoc.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
				$mail_userpassword="resultadosHOSPITAL1";//Tu contraseña de gmail
				$mail_addAddress=$a;//correo electronico que recibira el mensaje
				$template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
				
			/*	$mail_setFromEmail=$_POST['customer_email'];
				$mail_setFromName=$_POST['customer_name'];
				$txt_message=$_POST['message'];
				$mail_subject=$_POST['subject'];*/
				
				/*Inicio captura de datos enviados por $_POST para enviar el correo */
				$mail_setFromEmail=$_POST['Aorigen'];
				$mail_setFromName=$_SESSION['nombre_usuario'];
				$txt_message=$_POST['Descripcion'];
				$mail_subject=$_POST['Titulo'];
				
				/*$mail_setFromEmail="jmadrid@angelescuauhtemoc.com";
				$mail_setFromName=$_POST['Aorigen'];
				$txt_message=$_POST['Aorigen'];
				$mail_subject=$_POST['Aorigen'];
				*/
				sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template);//Enviar el mensaje
			}
/////////
?>