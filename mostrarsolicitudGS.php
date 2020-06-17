<?php include("db.php"); ?>

<?php
$usuariosesion = $_SESSION['nombre_usuario'];
// Incluimos el archivo de conexión a base de datos

// Diseñamos el encabezado de la tabla
//$data = "";

$query = "SELECT idsolicitud,areaservicio,asunto,prioridad,fechasolicitud,estatusactual FROM solicitudes ORDER BY Fecha DESC" ;
          $result_tasks = $data->query($query);

          if (isset($_POST['consulta'])) {
            $q = $data->real_escape_string($_POST['consulta']);
            $query = "SELECT idsolicitud,areaservicio,asunto,prioridad,fechasolicitud,estatusactual FROM solicitudes 
            where estatusactual LIKE '%$q%' ORDER BY Fecha DESC";
        }

$result_tasks = $data->query($query);

    if ($result_tasks->num_rows>0) {
$data = '
    <table class="table table-bordered table-hover table-condensed table-sm">
        <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>Para</th>
        <th>Asunto</th>
        <th>Prioridad</th>
        <th>Fecha</th>
        <th>Estado</th>
        
        <th>Ver Mas</th>
        
      </tr>
        </thead>';

        while($row = $result_tasks->fetch_assoc()) { 
            
            $prioridad = $row['prioridad'] ;
            if($prioridad=='ALTA'){
            $data .= '
        <tbody>
            <tr>
                
				<td>' . $row["idsolicitud"] . '</td>
                <td>' . $row["areaservicio"] . '</td>
                <td>' . $row["asunto"] . '</td>
                <td style="background-color:red;">'.$prioridad.'</td>
                <td>' . $row["fechasolicitud"] . '</td>
                <td>' . $row["estatusactual"] . '</td>
                <td>
                <a href="SoliEditar.php?IDSolicitud='.$row['idsolicitud'].'" class="btn btn-success">
                  <i class="fas fa-marker"></i>
                </a>
              </td>
            </tr>
          </tbody>';

            }
            if($prioridad=='BAJA'){
                $data .= '
            <tbody>
                <tr>
                <td>' . $row["idsolicitud"] . '</td>

                <td>' . $row["areaservicio"] . '</td>
                <td>' . $row["asunto"] . '</td>
                <td style="background-color:green;">'.$prioridad.'</td>
                <td>' . $row["fechasolicitud"] . '</td>
                <td>' . $row["estatusactual"] . '</td>
                    <td>
                    <a href="SoliEditar.php?IDSolicitud='.$row['idsolicitud'].'" class="btn btn-success">
                      <i class="fas fa-marker"></i>
                    </a>
                  </td>
                </tr>
                </tbody>';
            
    
                }
                if($prioridad=='NORMAL'){
                  $data .= '
              <tbody>
                  <tr>
                  <td>' . $row["idsolicitud"] . '</td>

                  <td>' . $row["areaservicio"] . '</td>
                  <td>' . $row["asunto"] . '</td>
                  <td style="background-color:orange;">'.$prioridad.'</td>
                  <td>' . $row["fechasolicitud"] . '</td>
                  <td>' . $row["estatusactual"] . '</td>
                      <td>
                      <a href="SoliEditar.php?IDSolicitud='.$row['idsolicitud'].'" class="btn btn-success">
                        <i class="fas fa-marker"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>';
      
                  }

              }
                $data.='</table>';

    
            }
            else{
              $data.="NO HAY DATOS :(";
            }
  


    echo $data;

   ?>