<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Solicitudes</title>
</head>
<body>
  
</body>
</html>
<?php include("db.php"); ?>
<?php
	require('valida3.php');
		
	?>




<?php include('includes/Gheader.php'); ?>

<script src="filtroGG.js"></script>

<main class="container p-4">
  <div class="row">
    <div class="col-md-2">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php  } 
      ;
      ?>

      <!-- ADD TASK FORM -->
     
    </div>
    <div class="col-md-10">
      <table class="table table-bordered">
        <thead>
        <div class="form-check form-check-inline" action = "ASolicitudes.php" method = "GET" >
  
</div>
<div class="form-check form-check-inline">
  
</div>
<div class="form-check form-check-inline">
  
</div>
<div class="form-check form-check-inline">
  
</div>


<div class= "table-responsive">
        <div id="tablas_Soli"> </div>
          </div>
          
          <?php  ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>