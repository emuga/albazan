<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Tintas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Tintas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarTinta">
          
          Agregar tinta

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <!-- <th>id</th> -->
           <th>Tipo</th>
           <th>Color</th>
           <th>Costo de la tinta</th>
           <th>Stock</th>
           <th>Rinde</th>
           <th>Costo de tinta por hoja</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

          <?php

            $item = null;
            $valor =null;

            $tintas = ControladorTintas::ctrMostrarTintas($item, $valor);
            // echo '<pre>'; print_r($clientes); echo '</pre>';

            foreach ($tintas as $key => $value) {

              echo '<tr>
                      
                      <td>'.($key+1).'</td>
                      <td>'.$value["tipo"].'</td>
                      <td>'.$value["color"].'</td>
                      <td>'.$value["costoTinta"].'</td>
                      <td>'.$value["stock"].'</td>
                      <td>'.$value["rinde"].'</td>
                      <td>'.$value["costoTintaHoja"].'</td>
                      <td>

                        <div class="btn-group">
                            
                          <button class="btn btn-warning btnEditarTinta" idTinta="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarTinta"><i class="fa fa-pencil"></i></button>

                          <button class="btn btn-danger btnEliminarTinta" idTinta="'.$value["id"].'" tinta="'.$value["tipo"].'"><i class="fa fa-times"></i></button>

                        </div>  

                      </td>

                    </tr>';

            }

          ?> 

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>
<!-- FIN MOSTRAR TINTAS -->

<!--=====================================
MODAL AGREGAR TINTAS
======================================-->

<div id="modalAgregarTinta" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar tintas</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL TIPO-->
            <div class="form-group">

                <label for="">Tipo</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoTipo" name="nuevoTipo" placeholder="Ingresar tipo"  required>

              </div>

            </div>

            <!-- ENTRADA PARA EL COLOR-->
            <div class="form-group">

                <label for="">Color</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoColor" step="0.001" name="nuevoColor" placeholder="Ingresar color"  required>

              </div>

            </div>

            <!-- ENTRADA PARA COSTO TINTA -->
            <div class="form-group">

                <label for="">Costo de la tinta</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" step="any" id="nuevoCostoTinta" step="0.001" name="nuevoCostoTinta" placeholder="Ingresar costo tinta" oninput="calcular()" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL STOCK-->
            <div class="form-group">

                <label for="">Stock</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoStock" step="0.001" name="nuevoStock" placeholder="Ingresar stock"  required>

              </div>

            </div>

            <!-- ENTRADA PARA RINDE -->
             <div class="form-group">

                <label for="">Rinde</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoRinde" step="0.001" name="nuevoRinde" placeholder="Ingresar rinde" oninput="calcular()" required>

              </div>

            </div>

            <!-- ENTRADA PARA COSTO TINTA POR HOJA -->
             <div class="form-group">

                <label for="">Costo tinta por hoja</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" step="any" id="nuevoCostoTintaHoja" name="nuevoCostoTintaHoja" placeholder="Ingresar costo tinta por hoja" oninput="calcular()" step="0.001" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Tinta</button>

        </div>

        <?php

          $crearTinta = new ControladorTintas();
          $crearTinta -> ctrCrearTinta();

        ?>

      </form>

    </div>

  </div>

</div>
<!-- FIN REGISTRAR NUEVA TINTA -->

<!--=====================================
MODAL EDITAR TINTA
======================================-->

<div id="modalEditarTinta" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar tinta</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL TIPO-->
            <div class="form-group">

              <input type="hidden" id="id" name="id" value="">

                <label for="">Tipo</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" value="" id="editarTipo" name="editarTipo" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL COLOR-->
            <div class="form-group">

                <label for="">Color</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" value="" id="editarColor" name="editarColor" required>

              </div>

            </div>

            <!-- ENTRADA PARA COSTO TINTA -->
            <div class="form-group">

                <label for="">Costo de la tinta</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" step="any" value="" id="editarCostoTinta" name="editarCostoTinta" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL STOCK-->
            <div class="form-group">

                <label for="">Stock</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" value="" id="editarStock" name="editarStock" required>

              </div>

            </div>

            <!-- ENTRADA PARA RINDE -->
             <div class="form-group">

                <label for="">Rinde</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" value="" id="editarRinde" name="editarRinde" required>

              </div>

            </div>

            <!-- ENTRADA PARA COSTO TINTA POR HOJA -->
             <div class="form-group">

                <label for="">Costo tinta por hoja</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" value="" id="editarCostoTintaHoja" step="any" name="editarCostoTintaHoja" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Tinta</button>

        </div>

        <!-- <?php

          $modificarTinta = new ControladorTintas();
          $modificarTinta -> ctrModificarTinta();

        ?> -->

      </form>

    </div>

  </div>

</div>
<!-- FIN MODAL EDITAR TINTA -->
<script type="text/javascript">
function calcular() {
  try {
    var a = parseFloat(document.getElementById("nuevoCostoTinta").value) || 0,
      b = parseFloat(document.getElementById("nuevoRinde").value) || 0;

    document.getElementById("nuevoCostoTintaHoja").value = a / b;
  } catch (e) {}
}
</script>
<?php

  $borrarTinta = new ControladorTintas();
  $borrarTinta -> ctrBorrarTinta();

?> 