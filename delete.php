<?php
include("config.php");
$con=Conectarse();
$id = $_GET['id'];
$sql = "DELETE FROM task WHERE id = '$id'";
$result = mysqli_query($con, $sql);
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrapcss" rel="stylesheet">
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if(!$result) { ?>
						<h3><?php printf("Error en ejecución: %s\n", mysqli_error($con));?></h3>
						<?php } else { ?>
						<h3>Tarea Eliminada</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>