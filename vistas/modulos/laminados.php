<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Laminado
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Laminado</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarLaminado">
          
          Agregar Laminado

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaLaminado">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Laminado</th>
           <!--<th>Acciones</th>-->

         </tr> 

        </thead>

        <tbody>
		
		<?php
		
			 $item = null;
			 $valor = null; 
		
			$laminado = ControladorLaminados::ctrMostrarLaminados($item, $valor);
			
			/* var_dump($maquinas); */
			
			foreach ($laminado as $key => $value){
				
				echo '<tr>
						<td>'.($key+1).'</td>
						<td>'.$value["CostoLaminado"].'</td>
						
						<td>

						  <div class="btn-group">
							  
							<button class="btn btn-warning btnEditarLaminado" idLaminado="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCostoLaminado"><i class="fa fa-pencil"></i></button>

							<!--<button class="btn btn-danger btnEliminarLaminado" idLaminado="'.$value["id"].'" laminado="'.$value["CostoLaminado"].'"><i class="fa fa-times"></i></button>-->

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
MODAL AGREGAR LAMINADO
======================================-->

<div id="modalAgregarLaminado" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Agregar laminado</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- NOMBRE -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Laminado</label>
                    
                            <input type="text" class="form-control" name="agregarCostoLaminado" step="any" placeholder="Agregar laminado" required>
                    
                        </div>

                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar laminado</button>

        </div>

        </div>

		
		<?php
		
			$crearLaminado = new ControladorLaminados();
			$crearLaminado -> ctrCrearLaminado();
		
		?>

      </form>
      
    </div>

</div>

<!--=====================================
MODAL EDITAR LAMINADO
======================================-->
<div id="modalEditarCostoLaminado" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Editar laminado</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- NOMBRE -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Laminado</label>
                    
                            <input type="text" class="form-control" name="editarLaminado" id="editarLaminado" value="">
                             <input type="hidden" name="idLaminado" id="idLaminado" value="">
                    
                        </div>

                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar laminado</button>

        </div>

        </div>

		
		<?php
		
			$editarLaminado = new ControladorLaminados();
			$editarLaminado -> ctrEditarLaminado();
		
		?>

      </form>
      
    </div>

</div>

<?php

  $borrarLaminado = new ControladorLaminados();
  $borrarLaminado -> ctrBorrarLaminado();

?>
