<?php include("db.php"); ?>

<?php

// Incluimos el archivo de conexión a base de datos



// Diseñamos el encabezado de la tabla
$data = "";

$query = "SELECT * FROM empleados  " ;
          $result_tasks = $conn->query($query);

          

$result_tasks = $conn->query($query);

    if ($result_tasks->num_rows>0) {
$data = '
    <table class="table table-bordered table-hover table-condensed table-sm">
        <thead class="thead-dark">
        <tr>
        <th>Empleado</th>
        <th>edad</th>
        <th>nacimiento</th>
        <th>pagado</th>
        <th>contrato</th>
        
        
        
        
        
      </tr>
        </thead>';

        while($row = $result_tasks->fetch_assoc()) { 
            
            
           
            $data .= '
        <tbody>
            <tr>
                
				<td>' . $row["nombre"] . '</td>
                <td>' . $row["edad"] . '</td>
                <td>' . $row["nacimiento"] . '</td>
                
                <td>' . $row["pagado"] . '</td>
                <td>' . $row["contrato"] . '</td>
               
                
                
              </td>
            </tr>
          </tbody>';

            
  
           

              }
                $data.='</table>';

    
            }
            else{
              $data.="NO HAY Empleados :(";
            }
  


    echo $data;

   ?>