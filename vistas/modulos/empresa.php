<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Empresa
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Empresa</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEmpresa">
          
          Agregar datos de la empresa

        </button> -->

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre empresa</th>
           <th>Raz&oacute;n Social</th>
           <th>RFC</th>
           <th>R&eacute;gimen fiscal</th>
           <th>Domicilio</th>
           <th>Colonia</th>
           <th>C.P.</th>
           <th>Ciudad</th>
           <th>Estado</th>
           <th>Pa&iacute;s</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

          <?php

            $item = null;
            $valor =null;

            $empresas = ControladorEmpresas::ctrMostrarEmpresas($item, $valor);
            //echo '<pre>'; print_r($clientes); echo '</pre>';

            foreach ($empresas as $key => $value) {

              echo '<tr>
                      <td>'.($key+1).'</td>
                      <td>'.$value["nombreEmpresa"].'</td>
                      <td>'.$value["razonSocial"].'</td>
                      <td>'.$value["rfc"].'</td>
                      <td>'.$value["regimenFiscal"].'</td>
                      <td>'.$value["domicilio"].'</td>
                      <td>'.$value["colonia"].'</td>
                      <td>'.$value["codigoPostal"].'</td>
                      <td>'.$value["ciudad"].'</td>
                      <td>'.$value["estado"].'</td>
                      <td>'.$value["pais"].'</td>
                      
                      <td>

                        <div class="btn-group">
                            
                          <button class="btn btn-warning btnEditarEmpresa" idEmpresa="'.$value["id_Empresa"].'" data-toggle="modal" data-target="#modalEditarEmpresa"><i class="fa fa-pencil"></i></button>

                          <button class="btn btn-danger btnEliminarEmpresa" idEmpresa="'.$value["id_Empresa"].'" empresa="'.$value["rfc"].'"><i class="fa fa-times"></i></button>

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
MODAL AGREGAR EMPRESA
======================================-->

<div id="modalAgregarEmpresa" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Empresa</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE EMPRESA-->
            <div class="form-group">

                <label for="">Nombre de la empresa</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarEmpresa" name="editarEmpresa" placeholder="Ingresar nombre empresa" required>

              </div>

            </div>

            <!-- ENTRADA PARA RAZON SOCIAL -->
            <div class="form-group">

                <label for="">Raz&oacute;n Social</label>

                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <input type="text" class="form-control input-lg" id="editarRS" name="editarRS" placeholder="Ingresar Raz&oacute;n Social">

                </div>

            </div>

            <!-- ENTRADA PARA RFC -->
            <div class="form-group">

                <label for="">RFC</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarRfc" name="editarRfc" placeholder="Ingresar RFC" required>

              </div>

            </div>

            <!-- ENTRADA PARA REGIMEN FISCAL -->
            <div class="form-group">

                <label for="">Regimen Fiscal</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarRF" name="editarRF" placeholder="Ingresar Regimen Fiscal" required>

              </div>

            </div>

            <!-- ENTRADA DOMICILIO -->
            
            <div class="form-group">

                <label for="">Domicilio</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarDomicilio" name="editarDomicilio" placeholder="Ingresar Domicilio" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL COLONIA -->
            <div class="form-group">

                <label for="">Colonia</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarColonia" name="editarColonia" placeholder="Ingresar colonia" required>

              </div>

            </div>

            <!-- ENTRADA PARA CODIGO POSTAL -->
            <div class="form-group">

                <label for="">Código Postal</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="number" class="form-control input-lg" id="editarCP" name="editarCP" placeholder="Ingresar c&oacute;digo postal" required>

              </div>

            </div>

              <!-- ENTRADA PARA CIUDAD -->
            <div class="form-group">

                <label for="">Ciudad</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCiudad" name="editarCiudad" placeholder="Ingresar ciudad" required>

              </div>

            </div>

              <!-- ENTRADA PARA ESTADO -->
            <div class="form-group">

                <label for="">Estado</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-city"></i></span> 

                <input type="text" class="form-control input-lg" id="editarEstado" name="editarEstado" placeholder="Ingresar estado" required>

              </div>

            </div>

             <!-- ENTRADA PARA PAIS -->
            
            <div class="form-group">

                <label for="">País</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-regular fa-flag fa-beat"></i></span> 

                <input type="text" class="form-control input-lg" id="editarPais" name="editarPais" placeholder="Ingresar pa&iacute;s" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar empresa</button>

        </div>

        <?php

        $agregarEmpresa = new ControladorEmpresas();
        $agregarEmpresa -> ctrAgregarEmpresa();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR EMPRESA
======================================-->

<div id="modalEditarEmpresa" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Empresa</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- EDITAR NOMBRE EMPRESA-->
            <div class="form-group">

                <label for="">Nombre de la empresa</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarEmpresa" name="editarEmpresa" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA RAZON SOCIAL -->
            <div class="form-group">

                <label for="">Raz&oacute;n Social</label>

                <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <input type="text" class="form-control input-lg" id="editarRS" name="editarRS" value="">

                </div>

            </div>

            <!-- ENTRADA PARA RFC -->
            <div class="form-group">

                <label for="">RFC</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarRfc" name="editarRfc" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA REGIMEN FISCAL -->
            <div class="form-group">

                <label for="">Regimen Fiscal</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarRF" name="editarRF" value="" required>

              </div>

            </div>

            <!-- ENTRADA DOMICILIO -->
            
            <div class="form-group">

                <label for="">Domicilio</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarDomicilio" name="editarDomicilio" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL COLONIA -->
            <div class="form-group">

                <label for="">Colonia</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarColonia" name="editarColonia" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA CODIGO POSTAL -->
            <div class="form-group">

                <label for="">Código Postal</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="number" class="form-control input-lg" id="editarCP" name="editarCP" value="" required>

              </div>

            </div>

              <!-- ENTRADA PARA CIUDAD -->
            <div class="form-group">

                <label for="">Ciudad</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCiudad" name="editarCiudad" value="" required>

              </div>

            </div>

              <!-- ENTRADA PARA ESTADO -->
            <div class="form-group">

                <label for="">Estado</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-city"></i></span> 

                <input type="text" class="form-control input-lg" id="editarEstado" name="editarEstado" value="" required>

              </div>

            </div>

             <!-- ENTRADA PARA PAIS -->
            
            <div class="form-group">

                <label for="">País</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-regular fa-flag fa-beat"></i></span> 

                <input type="text" class="form-control input-lg" id="editarPais" name="editarPais" value="" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Editar empresa</button>

        </div>

        <?php

        $editarEmpresa = new ControladorEmpresas();
        $editarEmpresa -> ctrEditarEmpresa();

        ?>

      </form>

    </div>

  </div>

</div>



<?php

  $eliminarCliente = new ControladorClientes();
  $eliminarCliente -> ctrEliminarCliente();

?>