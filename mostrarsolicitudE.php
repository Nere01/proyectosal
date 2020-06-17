<?php include("db.php"); ?>

<?php
// Incluimos el archivo de conexión a base de datos
$usuariosesion = $_SESSION['nombre_usuario'];
$id = $_SESSION['IDUsuario'];



// Diseñamos el encabezado de la tabla
$data = "";

$query = "SELECT * FROM empleados  " ;
          $result_tasks = $conn->query($query);

          if (isset($_POST['consulta'])) {
            $q = $conn->real_escape_string($_POST['consulta']);
            $query = "SELECT * FROM transporte where (Estado LIKE '%$q%' or Activo LIKE '%$q%' )and (nombre = '$usuariosesion')ORDER BY fecha DESC ";
        }

$result_tasks = $conn->query($query);

    if ($result_tasks->num_rows>0) {
$data = '
    <table class="table table-bordered table-hover table-condensed table-sm">
        <thead class="thead-dark">
        <tr>
        <th>No folio</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>fecha Nacimiento</th>
        <th>No de Contrato</th>
        
        
        
      </tr>
        </thead>';

        while($row = $result_tasks->fetch_assoc()) { 
            
          
            $data .= '
        <tbody>
            <tr>
                
				
                <td>' . $row["idempleado"] . '</td>
                <td>' . $row["nombre"] . '</td>
                <td>' . $row["edad"] . '</td>
                <td>' . $row["nacimiento"] . '</td>
                <td>' . $row["contrato"] . '</td>
             
               
            </tr>
          </tbody>';

            
            

              }
                $data.='</table>';

    
            }
            else{
              $data.="NO HAY DATOS :(";
            }
  


    echo $data;

   ?>