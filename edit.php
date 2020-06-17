<?php
include("db.php");
$title = '';
$description= '';
$Tipo= '';
$Estado= '';

if  (isset($_GET['IDUsuario'])) {
  $id = $_GET['IDUsuario'];
  $query = "SELECT * FROM usuario WHERE IDUsuario=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['Nombre'];
    $description = $row['Pass'];
    $Tipo= $row['Tipo'];
    $Estado= $row['Estado'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['IDUsuario'];
  $title= $_POST['title'];
  $description = $_POST['Passw'];
  $Tipo = $_POST['Tipo'];
  $Estado = $_POST['Estado'];

  $query = "UPDATE usuario set Nombre = '$title', Pass = '$description',Tipo = '$Tipo',Estado = '$Estado' WHERE IDUsuario=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tarea Realizada';
  $_SESSION['message_type'] = 'warning';
  header('Location: AUsuario.php'); // Esta es la aprte en la que se manda  de vuelta a la principal de operaciones
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?IDUsuario=<?php echo $_GET['IDUsuario']; ?>" method="POST">
        <div class="form-group">
          <input name="title" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="actualiza Nombre">
          Selecciona el Tipo de Usuario 
            <select name="Tipo" >
<option value="1">Administrador</option>
<option value="2">Encargado</option>
<option value="3">General</option>
          </select>
            <!-- combo  Box  -->
            Selecciona el Estado del Usuario
            <select name="Estado" >
<option value="Activo">Activo</option>
<option value="Inactivo">Inactivo</option>
          </select>
            <!-- combo  Box  -->
        </div>
        <div class="form-group">
        <textarea name="Passw" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
