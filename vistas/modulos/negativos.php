<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Negativo
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Negativo</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarNegativo">
          
          Agregar Negativo

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Negativo</th>
           <!--<th>Acciones</th>-->

         </tr> 

        </thead>

        <tbody>
		
		<?php
		
			 $item = null;
			 $valor = null; 
		
			$negativos = ControladorNegativos::ctrMostrarNegativos($item, $valor);
			
			/* var_dump($maquinas); */
			
			foreach ($negativos as $key => $value){
				
				echo '<tr>
						<td>'.($key+1).'</td>
						<td>'.$value["CostoNegativo"].'</td>
						
						<td>

						  <div class="btn-group">
							  
							<button class="btn btn-warning btnEditarCostoNegativo" idNegativo="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCostoNegativo"><i class="fa fa-pencil"></i></button>

							<!--<button class="btn btn-danger btnEliminarNegativo" idNegativo="'.$value["id"].'" negativo="'.$value["CostoNegativo"].'"><i class="fa fa-times"></i></button>-->

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
MODAL AGREGAR NEGATIVO
======================================-->

<div id="modalAgregarNegativo" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Agregar negativo</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- NOMBRE -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Negativo</label>
                    
                            <input type="text" class="form-control" name="agregarNegativo" placeholder="Agregar Negativo" required>
                    
                        </div>

                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Negativo</button>

        </div>

        </div>

		
		<?php
		
			$crearNegativo = new ControladorNegativos();
			$crearNegativo -> ctrCrearNegativo();
		
		?>

      </form>
      
    </div>

</div>

<!--=====================================
MODAL EDITAR NEGATIVO
======================================-->
<div id="modalEditarCostoNegativo" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Editar Negativo</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- NOMBRE -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Negativo</label>
                    
                            <input type="text" class="form-control" name="editarCostoNegativo" id="editarCostoNegativo" value="">
                             <input type="hidden" name="idNegativo" id="idNegativo" value="">
                    
                        </div>

                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar Negativo</button>

        </div>

        </div>

		
		<?php
		
			$editarNegativo = new ControladorNegativos();
			$editarNegativo -> ctrEditarNegativo();
		
		?>

      </form>
      
    </div>

</div>

<?php

  $borrarNegativo = new ControladorNegativos();
  $borrarNegativo -> ctrBorrarNegativo();

?>
