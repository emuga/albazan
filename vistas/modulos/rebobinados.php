<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Rebobinados
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Rebobinados</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRebobinado">
          
          Agregar Rebobinado

        </button> -->

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>3</th>
           <th>1.5</th>
           <th>1</th>
           <!--<th>Acciones</th>-->

         </tr> 

        </thead>

        <tbody>
		
		<?php
		
			 $item = null;
			 $valor = null; 
		
			$rebobinados = ControladorRebobinados::ctrMostrarRebobinados($item, $valor);
			
			/* var_dump($maquinas); */
			
			foreach ($rebobinados as $key => $value){
				
				echo '<tr>
						<td>'.($key+1).'</td>
						<td>'.$value["Tres"].'</td>
						<td>'.$value["UnoPuntoCinco"].'</td>
						<td>'.$value["Uno"].'</td>
						
						<td>

						  <div class="btn-group">
							  
							<button class="btn btn-warning btnEditarRebobinado" idRebobinado="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarRebobinado"><i class="fa fa-pencil"></i></button>

							<!--<button class="btn btn-danger btnEliminarRebobinado" idRebobinado="'.$value["id"].'" rebobinado="'.$value["Tres"].'"><i class="fa fa-times"></i></button>-->

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
MODAL AGREGAR REBOBINADOS
======================================-->

<div id="modalAgregarRebobinado" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Agregar Rebobinado</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- 3 -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Tres</label>
                    
                            <input type="text" class="form-control" name="agregarTres" placeholder="Agregar 3" required>
                    
                        </div>

                    </div>
                    
                    <!-- 1.5 -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">1.5</label>
                    
                            <input type="text" class="form-control" name="agregarUnoPuntoCinco" placeholder="Agregar 1.5" required>
                    
                        </div>

                    </div>
                    
                    <!-- 1 -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">1</label>
                    
                            <input type="text" class="form-control" name="agregarUno" placeholder="Agregar 1" required>
                    
                        </div>

                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Rebobinado</button>

        </div>

        </div>

		
		<?php
		
			$crearRebobinado = new ControladorRebobinados();
			$crearRebobinado -> ctrCrearRebobinado();
		
		?>

      </form>
      
    </div>

</div>

<!--=====================================
MODAL EDITAR REBOBINADO
======================================-->
<div id="modalEditarRebobinado" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Editar Rebobinado</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- NOMBRE -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Tres</label>
                    
                            <input type="text" class="form-control" name="editarTres" id="editarTres" step="any" value="">
                             <input type="hidden" name="idRebobinado" id="idRebobinado" value="">
                    
                        </div>
                        
                        <div class="form-group">
                    
                            <label for="nombre">1.5</label>
                    
                            <input type="text" class="form-control" name="editarUnoPuntoCinco" id="editarUnoPuntoCinco" step="any" value="">
                    
                        </div>
                        
                        <div class="form-group">
                    
                            <label for="nombre">Uno</label>
                    
                            <input type="text" class="form-control" name="editarUno" id="editarUno" step="any" value="">
                             
                    
                        </div>

                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar Rebobinado</button>

        </div>

        </div>

		
		<?php
		
			$editarRebobinado = new ControladorRebobinados();
			$editarRebobinado -> ctrEditarRebobinado();
		
		?>

      </form>
      
    </div>

</div>

<?php

  $borrarRebobinado = new ControladorRebobinados();
  $borrarRebobinado -> ctrBorrarRebobinado();

?>
