<!doctype html>
<html lang="en">
  <head>
      <title>Buscar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
  </head>
  <body>
<?php
include 'conn.php';

$id = $_POST['id'];
$sql="SELECT * FROM equipos WHERE id = $id ";
$rs = mysqli_query($conn, $sql);
$equipo = mysqli_fetch_array($rs);
?>

<div class="container">
    <h1>Editar busqueda:</h1>
    <div class="form-group">
        <form  action="/RentaPc/editar.php" method="POST">
            <p>ID: <input type="text" class="form-control"name="id" value="<?php echo $equipo ['id']; ?>">  </p><br>
            <p>Marca: <input type="text" class="form-control"name="marca" value="<?php echo $equipo ['marca']; ?>">  </p><br>
            <p>Modelo: <input type="text" class="form-control"name="modelo" value="<?php echo $equipo ['modelo']; ?>">   </p><br>
            <p>Serie: <input type="text" class="form-control"name="serie" value="<?php echo $equipo ['serie']; ?>">  </p><br>
            <p>Procesador: <input type="text" class="form-control"name="cpu" value="<?php echo $equipo ['cpu']; ?>"> </p><br>
            <p>Memoria RAM: <input type="text" class="form-control"name="ram" value="<?php echo $equipo ['ram']; ?>">   </p><br>
            <p>Disco Duro: <input type="text" class="form-control"name="dd" value="<?php echo $equipo ['dd']; ?>">   </p><br>
            <p>Tarjeta de Video: <input type="text" class="form-control"name="tv" value="<?php echo $equipo ['tv']; ?>">   </p><br>
            <p><input type="submit" class="btn btn-primary" value="Editar"></p>
        </form>   
    </div>   
</div><br>




<div class="jumbotron text-center" style="margin-bottom:0">
            <p>Dark Ops Hacking </p>
            <p>by Alexis Duran</p>
            <p>Contacto: soluciones.agon@gmail.com  </p>
            <a href="https://www.facebook.com/DarkOpsHacking">Facebook Dark Ops Hacking</a>
          </div>

        </body>
</html>