<!doctype html>
<html lang="en">
  <head>
      <title>Equipos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <script>
          $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
        </script>

        <style>
          table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
}
        </style>

  </head>
  
  <body >




        <div class="jumbotron text-center">
                <h1>Renta PC</h1>
                <p>Sistema administrativo de equipos de computo</p> 
              </div>
    <img src="http://localhost/RentaPc/img/dark.jpg" class="img-fluid" alt="Responsive image"><br>


    <!-- INICIO del modal :P -->
<div style="text-align: center;" class="container">
        <h1>Agregar equipos:</h1>
        
        <!-- BOTON DE MODAL -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          AGREGAR EQUIPO
        </button><!-- BOTON DE MODAL -->
      
      
        <!-- EL MODAL INICIO  -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Datos del Equipo:</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button> <!-- TACHITA X -->
              </div>
              
              <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <form action="/RentaPc/db.php" method="POST">
                        <label for="usr">Marca:</label>
                        <input type="text" class="form-control" name="marca">
      
                        <label for="usr">Modelo:</label>
                        <input type="text" class="form-control" name="modelo">
      
                        <label for="usr">Serie:</label>
                        <input type="text" class="form-control" name="serie">
      
                        <label for="usr">Procesador:</label>
                        <input type="text" class="form-control" name="cpu">
      
                        <label for="usr">Memoria RAM:</label>
                        <input type="text" class="form-control" name="ram">
      
                        <label for="usr">Disco Duro:</label>
                        <input type="text" class="form-control" name="dd">
      
                        <label for="usr">Tarjeta de Video:</label>
                        <input type="text" class="form-control" name="tv">
                        <br>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>   
                </div><br>
            </div>
              
              <!-- BOTON CERRAR DEL MODAL  -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
              </div>
              
            </div>
          </div>
        </div>
</div><br>
        <!-- EL MODAL FIN :X  -->

<div class="container">
    <h1>Editar busqueda por ID:</h1>
    <form action="/RentaPc/buscar.php" method="POST">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" name="id">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div><br>


<div class="container">
  <h1>Eliminar por ID:</h1>
  <form action="/RentaPc/eliminar.php" method="POST">
    <div class="form-group">
      <label for="id">ID:</label>
      <input type="text" class="form-control" name="id">
    </div>
    <button type="submit" class="btn btn-primary">Eliminar</button>
  </form>
</div><br>


<div class="container mt-3">
  <div style ="width: 20%">
<input type="text" class="form-control" id="myInput"  placeholder="Search..">
</div>
  <br>
        <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">CPU</th>
                    <th scope="col">RAM</th>
                    <th scope="col">DISCO</th>
                    <th scope="col">T.V.</th>
                  </tr>
                </thead>

                <?php
                include 'conn.php';
                    $sql_select = "SELECT * FROM equipos";
                    $rs_select = mysqli_query($conn, $sql_select);
                    while( $equipo = mysqli_fetch_array($rs_select) ) {
                ?>

                <tbody  id="myTable">
                  <tr>
                    <td> <?php echo $equipo ['id']; ?> </td>
                    <td> <?php echo $equipo ['marca']; ?> </td>
                    <td> <?php echo $equipo ['modelo']; ?> </td>
                    <td> <?php echo $equipo ['serie']; ?> </td>
                    <td> <?php echo $equipo ['cpu']; ?> </td>
                    <td> <?php echo $equipo ['ram']; ?> </td>
                    <td> <?php echo $equipo ['dd']; ?> </td>
                    <td> <?php echo $equipo ['tv']; ?> </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
    </div><br>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


    <div class="jumbotron text-center" style="margin-bottom:0">
            <p>Dark Ops Hacking </p>
            <p>by Alexis Duran</p>
            <p>Contacto: soluciones.agon@gmail.com  </p>
            <a href="https://www.facebook.com/DarkOpsHacking">Facebook Dark Ops Hacking</a>
          </div>
    
  </body>
</html>