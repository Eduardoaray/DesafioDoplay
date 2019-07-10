<?php
include("config.php");
$con = Conectarse();
$id = $_GET['id'];	
$sql = "SELECT * FROM task WHERE id = '$id'";
$resul = mysqli_query($con,$sql);
$mostrar =mysqli_fetch_array($resul);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3 style="text-align:center">MODIFICAR  TAREA</h3>
        </div>
        <form class="form-horizontal" action="update.php" method="post"autocomplete="off">
            <div class="form-group">
                <label for="owner" class="col-sm-2 control-label">Autor</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $mostrar['owner']; ?>" class="form-control" id="owner" name="owner" placeholder="Autor" required>
                </div>
            </div>
            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
            <div class="form-group">
                <label for="category" class="col-sm-2 control-label">Categoria</label>
                <div class="col-sm-10">
                    <select name="categoryID" autofocusid="categoryID">
                        <?php
                        $sql1 = "SELECT * FROM category ";
                        $resull = mysqli_query($con,$sql1)
                         ?>
                        <?php while ($row = mysqli_fetch_array($resull)) {
                             // code...
                          ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php   } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="date" class="col-sm-2 control-label">Fecha</label>
                <div class="col-sm-10">
                    <input type="datetime" value="<?php echo date("d-m-Y");?>" class="form-control" id="date" disabled selected
                        name="date" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Tarea a realizar</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $mostrar['name']; ?>"  class="form-control" id="name" name="name" placeholder="Nombre" required>
                </div>
            </div>
            <div class="form-group">
					<label for="Archived" class="col-sm-2 control-label">¿Desea Archivar Tarea?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="Archived" name="Archived" value="1" checked> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="Archived" name="Archived" value="0"> NO
						</label>
					</div>
				</div>
            </div>
           
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="index.php" class="btn btn-primary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                    
                </div>



        </form>
      </div>

    </div>
</body>

</html>
