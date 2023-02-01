<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar clientes
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar clientes</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
          
          Agregar cliente

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre empresa</th>
           <th>RFC</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Correo</th>
           <th>Tel&eacute;fono</th>
           <th>Calle</th>
           <th>Colonia</th>
           <th>C&oacute;digo Postal</th>
           <th>Ciudad</th>
           <th>Estado</th>
           <th>Pa&iacute;s</th>
           <!-- <th>Compras</th>
           <th>&Uacute;ltima compra</th> -->
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

          <?php

            $item = null;
            $valor =null;

            $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
            //echo '<pre>'; print_r($clientes); echo '</pre>';

            foreach ($clientes as $key => $value) {

              echo '<tr>
                      <td>'.($key+1).'</td>
                      <td>'.$value["nombreEmpresa"].'</td>
                      <td>'.$value["rfc"].'</td>
                      <td>'.$value["nombre"].'</td>
                      <td>'.$value["apellido"].'</td>
                      <td>'.$value["correo"].'</td>
                      <td>'.$value["telefono"].'</td>
                      <td>'.$value["calle"].'</td>
                      <td>'.$value["colonia"].'</td>
                      <td>'.$value["codigoPostal"].'</td>
                      <td>'.$value["ciudad"].'</td>
                      <td>'.$value["estado"].'</td>
                      <td>'.$value["pais"].'</td>
                      
                      <td>

                        <div class="btn-group">
                            
                          <button class="btn btn-warning btnEditarCliente" idCliente="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCliente"><i class="fa fa-pencil"></i></button>

                          <button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'" cliente="'.$value["rfc"].'"><i class="fa fa-times"></i></button>

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
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

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

                <input type="text" class="form-control input-lg" id="nuevoNombreEmpresa" name="nuevoNombreEmpresa" placeholder="Ingresar nombre empresa" required>

              </div>

            </div>

            <!-- ENTRADA PARA RFC -->

            <div class="form-group">

                <label for="">RFC de la empresa</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoRfc" name="nuevoRfc" placeholder="Ingresar RFC" required>

              </div>

            </div>

            <!-- ENTRADA PARA NOMBRE -->

             <div class="form-group">

                <label for="">Nombres</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoNombre" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA APELLIDO -->

             <div class="form-group">

                <label for="">Apellidos</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoApellido" name="nuevoApellido" placeholder="Ingresar apellido" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">

                <label for="">Correo electrónico</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" id="nuevoCorreo" name="nuevoCorreo" placeholder="Ingresar correo" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            
            <div class="form-group">

                <label for="">Teléfono</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoTelefono" name="nuevoTelefono" placeholder="Ingresar tel&eacute;fono" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CALLE -->
            
            <div class="form-group">

                <label for="">Calle</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCalle" name="nuevoCalle" placeholder="Ingresar calle" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL COLONIA -->
            <div class="form-group">

                <label for="">Colonia</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoColonia" name="nuevoColonia" placeholder="Ingresar colonia" required>

              </div>

            </div>

            <!-- ENTRADA PARA CODIGO POSTAL -->
            
            <div class="form-group">

                <label for="">Código Postal</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="number" class="form-control input-lg" id="nuevoCodigoPostal" name="nuevoCodigoPostal" placeholder="Ingresar c&oacute;digo postal" required>

              </div>

            </div>

              <!-- ENTRADA PARA CIUDAD -->
            
            <div class="form-group">

                <label for="">Ciudad</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCiudad" name="nuevoCiudad" placeholder="Ingresar ciudad" required>

              </div>

            </div>

              <!-- ENTRADA PARA ESTADO -->
            
            <div class="form-group">

                <label for="">Estado</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoEstado" name="nuevoEstado" placeholder="Ingresar estado" required>

              </div>

            </div>

             <!-- ENTRADA PARA PAIS -->
            
            <div class="form-group">

                <label for="">País</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoPais" name="nuevoPais" placeholder="Ingresar pa&iacute;s" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar clientes</button>

        </div>

        <?php

        $agregarCliente = new ControladorClientes();
        $agregarCliente -> ctrAgregarCliente();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

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

                <input type="text" class="form-control input-lg" id="editarEmpresa" name="editarEmpresa" required>

                <input type="hidden" name="idCliente" id="idCliente" value="">

              </div>

            </div>

            <!-- ENTRADA PARA RFC -->

            <div class="form-group">

                <label for="">RFC de la empresa</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarRfc" name="editarRfc" required>

              </div>

            </div>

            <!-- ENTRADA PARA NOMBRE -->

             <div class="form-group">

                <label for="">Nombres</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA APELLIDO -->

             <div class="form-group">

                <label for="">Apellidos</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" id="editarApellido" name="editarApellido" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">

                <label for="">Correo electrónico</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" id="editarCorreo" name="editarCorreo" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            
            <div class="form-group">

                <label for="">Teléfono</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarTelefono" name="editarTelefono" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CALLE -->
            
            <div class="form-group">

                <label for="">Calle</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCalle" name="editarCalle" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL COLONIA -->
            <div class="form-group">

                <label for="">Colonia</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarColonia" name="editarColonia" required>

              </div>

            </div>

            <!-- ENTRADA PARA CODIGO POSTAL -->
            
            <div class="form-group">

                <label for="">Código Postal</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="number" class="form-control input-lg" id="editarCp" name="editarCp" required>

              </div>

            </div>

              <!-- ENTRADA PARA CIUDAD -->
            
            <div class="form-group">

                <label for="">Ciudad</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCiudad" name="editarCiudad" required>

              </div>

            </div>

              <!-- ENTRADA PARA ESTADO -->
            
            <div class="form-group">

                <label for="">Estado</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarEstado" name="editarEstado"  required>

              </div>

            </div>

             <!-- ENTRADA PARA PAIS -->
            
            <div class="form-group">

                <label for="">País</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="text" class="form-control input-lg" id="editarPais" name="editarPais" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Editar clientes</button>

        </div>

        <?php

        $editarCliente = new ControladorClientes();
        $editarCliente -> ctrEditarCliente();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

  $eliminarCliente = new ControladorClientes();
  $eliminarCliente -> ctrEliminarCliente();

?>