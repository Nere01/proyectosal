<?php include("db.php"); ?>

<?php

// Incluimos el archivo de conexión a base de datos



// Diseñamos el encabezado de la tabla
$data = "";

$query = "SELECT IDSolicitud,Solicitante,Aorigen,Adestino,Titulo,Prioridad,Fecha,Estado,Visto FROM solicitud ORDER BY Fecha DESC" ;
          $result_tasks = $conn->query($query);

          if (isset($_POST['consulta'])) {
            $q = $conn->real_escape_string($_POST['consulta']);
            $query = "SELECT IDSolicitud,Solicitante,Aorigen,Adestino,Titulo,Prioridad,Fecha,Estado,Visto FROM solicitud where Estado LIKE '%$q%' or Activo LIKE '%$q%'  ORDER BY Fecha DESC";
        }

$result_tasks = $conn->query($query);

    if ($result_tasks->num_rows>0) {
$data = '
    <table class="table table-bordered table-hover table-condensed table-sm">
        <thead class="thead-dark">
        <tr>
        <th>Solicitante</th>
        <th>Para</th>
        <th>De Area</th>
        <th>Titulo</th>
        <th>Prioridad</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Visto</th>
        <th>Ver Mas</th>
        
      </tr>
        </thead>';

        while($row = $result_tasks->fetch_assoc()) { 
            
            $prioridad = $row['Prioridad'] ;
            if($prioridad=='Alta'){
            $data .= '
        <tbody>
            <tr>
                
				<td>' . $row["Solicitante"] . '</td>
                <td>' . $row["Aorigen"] . '</td>
                <td>' . $row["Adestino"] . '</td>
                <td>' . $row["Titulo"] . '</td>
                <td style="background-color:red;">'.$prioridad.'</td>
                <td>' . $row["Fecha"] . '</td>
                <td>' . $row["Estado"] . '</td>
                <td>' . $row["Visto"] . '</td>
                <td>
                <a href="SoliEditar.php?IDSolicitud='.$row['IDSolicitud'].'" class="btn btn-success">
                  <i class="fas fa-marker"></i>
                </a>
              </td>
            </tr>
          </tbody>';

            }
            if($prioridad=='Baja'){
                $data .= '
            <tbody>
                <tr>
                    
                    <td>' . $row["Solicitante"] . '</td>
                    <td>' . $row["Aorigen"] . '</td>
                    <td>' . $row["Adestino"] . '</td>
                    <td>' . $row["Titulo"] . '</td>
                    <td style="background-color:green;">'.$prioridad.'</td>
                    <td>' . $row["Fecha"] . '</td>
                    <td>' . $row["Estado"] . '</td>
                    <td>' . $row["Visto"] . '</td>
                    <td>
                    <a href="SoliEditar.php?IDSolicitud='.$row['IDSolicitud'].'" class="btn btn-success">
                      <i class="fas fa-marker"></i>
                    </a>
                  </td>
                </tr>
                </tbody>';
            
    
                }
                if($prioridad=='Media'){
                  $data .= '
              <tbody>
                  <tr>
                      
              <td>' . $row["Solicitante"] . '</td>
                      <td>' . $row["Aorigen"] . '</td>
                      <td>' . $row["Adestino"] . '</td>
                      <td>' . $row["Titulo"] . '</td>
                      <td style="background-color:orange;">'.$prioridad.'</td>
                      <td>' . $row["Fecha"] . '</td>
                      <td>' . $row["Estado"] . '</td>
                      <td>' . $row["Visto"] . '</td>
                      <td>
                      <a href="SoliEditar.php?IDSolicitud='.$row['IDSolicitud'].'" class="btn btn-success">
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