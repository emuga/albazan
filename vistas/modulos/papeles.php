<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar papel
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar papel</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPapel">
          
          Agregar papel

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Papel</th>
           <th>Costo papel</th>
           <th>Tamaño Horizontal</th>
	         <th>Tamaño Vertical</th>
           <th>Color</th>
           <th>Paquetes</th>
           <th>Cantidad paquetes</th>
           <th>Costo por hoja</th>
           <th>Stock</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

          <?php

            $item = null;
            $valor = null;

            $papeles = ControladorPapeles::ctrMostrarPapeles($item, $valor);

            //var_dump($papeles);

            foreach ($papeles as $key => $value) {

              echo '<tr>
                      <td>'.($key+1).'</td>
                      <td>'.$value["papel"].'</td>
                      <td>'.$value["costoPapel"].'</td>
                      <td>'.$value["tamanoHorizontal"].'</td>
		                  <td>'.$value["tamanoVertical"].'</td>
                      <td>'.$value["color"].'</td>
                      <td>'.$value["paquetes"].'</td>
                      <td>'.$value["cantidadPaquete"].'</td>
                      <td>'.$value["costoHoja"].'</td>
                      <td>'.$value["stock"].'</td>
                      <td>

                        <div class="btn-group">
                            
                          <button class="btn btn-warning btnEditarPapel" idPapel="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarPapel"><i class="fa fa-pencil"></i></button>
                          
                          <button class="btn btn-danger btnEliminarPapel" idPapel="'.$value["id"].'" ><i class="fa fa-times"></i></button>

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

<!--=====================================
MODAL AGREGAR PAPELES
======================================-->

<div id="modalAgregarPapel" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar papeles</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL PAPEL -->
            
            <div class="form-group">

                <label for="">Papel</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoPapel" name="nuevoPapel" placeholder="Ingresar papel" oninput="calcular()" required>

              </div>

            </div>

            <!-- COSTO PAPEL -->
            <div class="form-group">

                <label for="">Costo papel</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" id="nuevoCostoPapel" name="nuevoCostoPapel" oninput="calcular()" required>

              </div>

            </div>

            <!-- TAMAÑO HORIZONTAL -->
            <div class="form-group">

                <label for="">Tamaño Horizontal</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" id="nuevoTamanoHorizontal" name="nuevoTamanoHorizontal" oninput="calcular()" required>

              </div>

            </div>

             <!-- TAMAÑO VERTICAL -->
            <div class="form-group">

                <label for="">Tamaño Vertical</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" id="nuevoTamanoVertical" name="nuevoTamanoVertical" oninput="calcular()" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL COLOR -->
             <div class="form-group">

                <label for="">Color</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoColor" name="nuevoColor" oninput="calcular()" required>

              </div>

            </div>

            <!-- COSTO PAQUETES -->
            <div class="form-group">

                <label for="">Paquetes</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" id="nuevoPaquetes" name="nuevoPaquetes" oninput="calcular()" required>

              </div>

            </div>

	       <!-- PAQUETES -->
            <div class="form-group">

                <label for="">Cantidad por paquete</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" id="nuevoCantidadPaquete" name="nuevoCantidadPaquete" oninput="calcular()" required>

              </div>

            </div>

            <!-- COSTO POR HOJA -->
             <div class="form-group">

                <label for="">Costo por hoja</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" id="nuevoCostoHoja" name="nuevoCostoHoja" value="" required>

              </div>

            </div>

            <!-- STOCK -->
             <div class="form-group">

                <label for="">Stock</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" id="nuevoStock" name="nuevoStock" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar papeles</button>

        </div>

        <?php

          $crearPapel = new ControladorPapeles();
          $crearPapel -> ctrCrearPapel();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR
======================================-->

<div id="modalEditarPapel" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar papel</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL PAPEL -->
            
            <div class="form-group">

                <label for="">Papel</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarPapel" id="editarPapel" value="" oninput="calcular()" required>

                <input type="hidden" id="idPapel" name="idPapel">

              </div>

            </div>

            <!-- ENTRADA PARA EL COLOR -->

             <div class="form-group">

                <label for="">Costo del papel</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarCostoPapel" id="editarCostoPapel" value="" oninput="calcular()" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA TAMAÑO VERTICAL -->

            <div class="form-group">

                <label for="">Tamaño Horizontal</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" name="editarTamanoHorizontal" id="editarTamanoHorizontal" value="" oninput="calcular()" required>

              </div>

            </div>
      
      <!-- ENTRADA PARA LA TAMAÑO HORIZONTAL-->

            <div class="form-group">

                <label for="">Tamaño Vertical</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" name="editarTamanoVertical" id="editarTamanoVertical" value="" oninput="calcular()" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CANTIDAD -->

             <div class="form-group">

                <label for="">Color</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" name="editarColor" id="editarColor" value="" required>

              </div>

            </div>

            <!-- COSTO PAQUETES -->
            <div class="form-group">

                <label for="">Paquetes</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" name="editarPaquetes" id="editarPaquetes" oninput="calcular()" required>

              </div>

            </div>

            <!-- PAQUETES -->
            <div class="form-group">

                <label for="">Cantidad por paquete</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" name="editarCantidadPaquete" id="editarCantidadPaquete" oninput="calcular()" required>

              </div>

            </div>

            <!-- COSTO POR HOJA -->
             <div class="form-group">

                <label for="">Costo por hoja</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" step="0.001" name="editarCostoHoja" id="editarCostoHoja" required>

              </div>

            </div>

            <!-- STOCK -->
             <div class="form-group">

                <label for="">Stock</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" min="0" step="0.001" name="editarStock" id="editarStock" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Editar Papel</button>

        </div>

      </form>

        <?php

          $editarPapel = new ControladorPapeles();
          $editarPapel -> ctrEditarPapel();

        ?>

      

    </div>

  </div>

</div>

<?php

  $eliminarPapel = new ControladorPapeles();
  $eliminarPapel -> ctrEliminarPapel();

?>