<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar maquinaria
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar maquinaria</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMaquinaria">
          
          Agregar maquinaria

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaMaquinas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Tipo</th>
           <th>Marca</th>
           <th>Costo</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
		
		<?php
		
			 $item = null;
			 $valor = null; 
		
			$maquinas = ControladorMaquinas::ctrMostrarMaquinas($item, $valor);
			
			/* var_dump($maquinas); */
			
			foreach ($maquinas as $key => $value){
				
				echo '<tr>
						<td>'.($key+1).'</td>
						<td>'.$value["tipo"].'</td>
						<td>'.$value["marca"].'</td>
						<td>$ '.$value["costo"].'</td>
						<td>

						  <div class="btn-group">
							  
							<button class="btn btn-warning btnEditarMaquina" idMaquina="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarMaquina"><i class="fa fa-pencil"></i></button>

							<button class="btn btn-danger btnEliminarMaquina" idMaquina="'.$value["id"].'" maquina="'.$value["tipo"].'"><i class="fa fa-times"></i></button>

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
MODAL AGREGAR MAQUINARIA
======================================-->

<div id="modalAgregarMaquinaria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar maquinaria</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL TIPO -->
            
            <div class="form-group">

                <label for="">Tipo de maquina</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTipo" placeholder="Ingresar el tipo de maquina" required>

              </div>

            </div>

            <!-- ENTRADA PARA MARCA -->

             <div class="form-group">

                <label for="">Marca</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaMarca" placeholder="Ingresar marca" required>

              </div>

            </div>

            <!-- ENTRADA PARA COSTO -->

             <div class="form-group">

                <label for="">Costo</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="number" class="form-control input-lg" step="any" name="nuevoCosto" min="0" placeholder="Ingresar costo" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar maquina</button>

        </div>
		
		<?php
		
			$crearMaquina = new ControladorMaquinas();
			$crearMaquina -> ctrCrearMaquina();
		
		?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR MAQUINA
======================================-->

<div id="modalEditarMaquina" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar maquina</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA TIPO -->
            
            <div class="form-group">

                <label for="">Tipo de maquina</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarTipo" name="editarTipo" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA MARCA -->

             <div class="form-group">

                <label for="">Marca</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarMarca" name="editarMarca" value="" >

              </div>

            </div>

            <!-- ENTRADA PARA COSTO -->

             <div class="form-group">

                <label for="">Costo</label>
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" step="any" id="editarCosto" name="editarCosto"  value="">

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar maquinaria</button>

        </div>

     <?php

          $editarMaquina = new ControladorMaquinas();
          $editarMaquina -> ctrEditarMaquina();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarMaquina = new ControladorMaquinas();
  $borrarMaquina -> ctrBorrarMaquina();

?>
