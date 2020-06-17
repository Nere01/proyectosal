<?php include("db.php"); ?>

<?php
// Incluimos el archivo de conexión a base de datos
$usuariosesion = $_SESSION['nombre_usuario'];
$id = $_SESSION['IDUsuario'];



// Diseñamos el encabezado de la tabla
$data = "";

$query = "SELECT * FROM contrato  " ;
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
        <th>No. contrato</th>
        <th>encargado</th>
        <th>arquitecto</th>
        <th>Dinero</th>
        <th>descripcion</th>
        <th>Estado</th>
        <th>Ver empledaos</th>

      </tr>
        </thead>';

        while($row = $result_tasks->fetch_assoc()) { 
            
          
            $data .= '
        <tbody>
            <tr>
                
				
                <td>' . $row["idcontrato"] . '</td>
                <td>' . $row["encargado"] . '</td>
                <td>' . $row["arquitecto"] . '</td>
                <td>' . $row["dinero"] . '</td>
                <td>' . $row["info"] . '</td>
                
                <td>' . $row["terminado"] . '</td>
                
                <td>
                <a href="GEasignados.php?ID='.$row['idcontrato'].'" class="btn btn-success">
                  <i class="fas fa-marker"></i>
                </a>
              </td>
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