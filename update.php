<?php
include("config.php");
$con=Conectarse();
$id = $_POST['id'];
$owner		= $_POST['owner'];
$category	= $_POST['categoryID'];
//$date 	= $_POST['date'];
$name 	= $_POST['name'];
$Archived = isset($_POST['Archived']) ? $_POST['Archived'] : 0;

date_default_timezone_set('America/Santiago'); 
$date = date('Y-m-d H:i:s');  

$sql  = "UPDATE task SET owner='$owner',category=$category,createdAt='$date',name='$name',isArchived=chr($Archived) WHERE id='$id'";
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
						<h3>Tarea Modificada</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>