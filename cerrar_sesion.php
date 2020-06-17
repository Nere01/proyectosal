<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php

  session_start();
	$_SESSION['user'] = 0;
	header("Location:index.php");
	session_destroy();
	?>
</body>
</html>