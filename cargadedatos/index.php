<?php

  include_once("conexion.php");

?>

<!doctype html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carga de datos con Select PHP & MySQL | BaulPHP</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/getData.js"></script>

  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">

      <div class="row">

        <div class="col-12 col-md-10"> 

          <!-- Contenido -->
          <div class="container">

            <div class="page-header">

                <select id="etiqueta">

                  <option value="" selected="selected">Selecionar etiqueta</option>

                    <?php

                      $sql = "SELECT id, nombre, finalx, finaly FROM dados LIMIT 10";

                      $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

                      while( $rows = mysqli_fetch_assoc($resultset) ) { 

                    ?>

                  <option value="<?php echo $rows["id"]; ?>"><?php echo $rows["nombre"]; ?></option>

                  <?php }	?>

                </select>

            </div><br>

            <div id="display">

              <div class="row" id="heading" style="display:none;"><br>

                <h5>Resultados de la Base de Datos.</h5><br>

                <table class="table">

                  <thead class="thead-dark">

                    <tr>

                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Finalx</th>
                      <th scope="col">Finaly</th>

                    </tr>

                  </thead>

                  <tbody>

                  <tr>

                    <th scope="row">1</th>

                      <td>

                        <div class="col-sm-4" id="nombre"></div>

                      </td>

                      <td>

                        <div class="col-sm-4" id="finalx"></div>

                      </td>

                      <td>

                        <div class="col-sm-4" id="finaly"></div>

                      </td>

                    </tr>

                  </tbody>

                </table> 

              </div><br>

              <div class="row" id="no_records">

                <div class="col-sm-10">

                  Por favor, seleccione el nombre del dado para ver los detalles

                </div>

              </div>

            </div>		

          </div>

          <!-- Fin Contenido --> 
        </div>

      </div>
      <!-- Fin row --> 

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== --> 
    <script src="dist/js/bootstrap.min.js"></script> 
    <!-- Placed at the end of the document so the pages load faster -->

  </body>

</html>
