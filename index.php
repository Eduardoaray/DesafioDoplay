<?php
include("config.php");
$con = Conectarse();
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center"></h2>
        </div>
        <div class="row">
            <a href="Nuevo.php" class="btn btn-primary">Nuevo Tarea</a>
        </div>
    </div>
    <br>
    <h2>Pendientes</h2>
    <?php
  $sql = "SELECT * FROM task WHERE category = '1'";
  $resul = mysqli_query($con,$sql);
  ?>
    <div class="row table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Fecha de Creacion</td>
                    <td>Archivar</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php while ($mostrar = mysqli_fetch_array($resul)) {
        // code...
     ?>
                <tr>
                    <td><?php echo $mostrar['id']; ?></td>
                    <td><?php echo $mostrar['name']; ?></td>
                    <td><?php echo $mostrar['createdAt']; ?></td>
                    <td><?php echo $mostrar['isArchived']; ?></td>
                    <td><a href="modificar.php?id=<?php echo $mostrar['id']; ?>">editar</a></td>
                    <td><a href="delete.php?id=<?php echo $mostrar['id']; ?>">eliminar</a></td>
                </tr>
                <?php   } ?>

            </tbody>

        </table>
    </div>
    <br>
    <h2>En Proceso</h2>
    <?php
  $sql = "SELECT * FROM task WHERE category = '2'";
  $resul = mysqli_query($con,$sql);
  ?>
    <div class="row table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Fecha de Creacion</td>
                    <td>Archivar</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php while ($mostrar = mysqli_fetch_array($resul)) {
        // code...
     ?>
                <tr>
                    <td><?php echo $mostrar['id']; ?></td>
                    <td><?php echo $mostrar['name']; ?></td>
                    <td><?php echo $mostrar['createdAt']; ?></td>
                    <td><?php echo $mostrar['isArchived']; ?></td>
                    <td><a href="modificar.php?id=<?php echo $mostrar['id']; ?>">editar</a></td>
                    <td><a href="delete.php?id=<?php echo $mostrar['id']; ?>">eliminar</a></td>
                </tr>
                <?php   } ?>

            </tbody>

        </table>
    </div>
    <br>
    <h2>finalizadas</h2>
    <?php
  $sql = "SELECT * FROM task WHERE category = '1'";
  $resul = mysqli_query($con,$sql);
  ?>
    <div class="row table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Fecha de Creacion</td>
                    <td>Archivar</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php while ($mostrar = mysqli_fetch_array($resul)) {
        // code...
     ?>
                <tr>
                    <td><?php echo $mostrar['id']; ?></td>
                    <td><?php echo $mostrar['name']; ?></td>
                    <td><?php echo $mostrar['createdAt']; ?></td>
                    <td><?php echo $mostrar['isArchived']; ?></td>
                    <td><a href="modificar.php?id=<?php echo $mostrar['id']; ?>">editar</a></td>
                    <td><a href="delete.php?id=<?php echo $mostrar['id']; ?>">eliminar</a></td>
                </tr>
                <?php   } ?>

            </tbody>

        </table>
    </div>
</body>

</html>