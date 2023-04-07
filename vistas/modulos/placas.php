<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Placas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Placa</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPlaca">
          
          Agregar Placa

        </button> -->

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Placa</th>
           <!-- <th>Acciones</th> -->

         </tr> 

        </thead>

        <tbody>
		
		<?php
		
			 $item = null;
			 $valor = null; 
		
			$placas = ControladorPlacas::ctrMostrarPlacas($item, $valor);
			
			/* var_dump($maquinas); */
			
			foreach ($placas as $key => $value){
				
				echo '<tr>
						<td>'.($key+1).'</td>
						<td>'.$value["CostoPulgada"].'</td>
						
						<td>

						  <div class="btn-group">
							  
							<button class="btn btn-warning btnEditarPlaca" idPlaca="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarPlaca"><i class="fa fa-pencil"></i></button>

							<!--<button class="btn btn-danger btnEliminarPulgada" idPlaca="'.$value["id"].'" placa="'.$value["CostoPulgada"].'"><i class="fa fa-times"></i></button>-->

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
MODAL AGREGAR PLACA
======================================-->

<div id="modalAgregarPlaca" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Agregar Placa</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- NOMBRE -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Placa</label>
                    
                            <input type="text" class="form-control" name="agregarPlaca" placeholder="Agregar Placa" required>
                    
                        </div>

                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Placa</button>

        </div>

        </div>

		
		<?php
		
			$crearPlaca = new ControladorPlacas();
			$crearPlaca -> ctrCrearPlaca();
		
		?>

      </form>
      
    </div>

</div>

<!--=====================================
MODAL EDITAR PLACA
======================================-->
<div id="modalEditarPlaca" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Editar Placa</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- NOMBRE -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Placa</label>
                    
                            <input type="text" class="form-control" name="editarCostoPulgada" id="editarCostoPulgada" value="">
                             <input type="hidden" name="idPlaca" id="idPlaca" value="">
                    
                        </div>

                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar Placa</button>

        </div>

        </div>

		
		<?php
		
			$editarPlaca = new ControladorPlacas();
			$editarPlaca -> ctrEditarPlaca();
		
		?>

      </form>
      
    </div>

</div>

<?php

  $borrarPulgada = new ControladorPlacas();
  $borrarPulgada -> ctrBorrarPlaca();

?>
