<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Dados
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Dados</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarDado">
          
          Agregar Dados

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Final X</th>
           <th>Final Y</th>
           <th>Caben X</th>
           <th>Caben Y</th>
           <th>GapIntx</th>
           <th>GapInty</th>
           <th>NumGapsx</th>
           <th>NumGapsy</th>
           <th>GapExtx</th>
           <th>GapExty</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
		
		<?php
		
			 $item = null;
			 $valor = null; 
		
			$dados = ControladorDados::ctrMostrarDados($item, $valor);
			
			/* var_dump($maquinas); */
			
			foreach ($dados as $key => $value){
				
				echo '<tr>
						<td>'.($key+1).'</td>
						<td>'.$value["nombre"].'</td>
						<td>'.$value["finalx"].'</td>
						<td>'.$value["finaly"].'</td>
						<td>'.$value["cabenx"].'</td>
						<td>'.$value["cabeny"].'</td>
						<td>'.$value["GapIntx"].'</td>
						<td>'.$value["GapInty"].'</td>
						<td>'.$value["NoGapsx"].'</td>
						<td>'.$value["NoGapsy"].'</td>
						<td>'.$value["GapExty"].'</td>
						<td>'.$value["GapExtx"].'</td>
						
						
						<td>

						  <div class="btn-group">
							  
							<button class="btn btn-warning btnEditarDado" idDado="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarDado"><i class="fa fa-pencil"></i></button>

							<button class="btn btn-danger btnEliminarDado" idDado="'.$value["id"].'" dado="'.$value["nombre"].'"><i class="fa fa-times"></i></button>

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
MODAL AGREGAR DADO
======================================-->

<div id="modalAgregarDado" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Agregar dado</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- NOMBRE -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Nombre</label>
                    
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                    
                        </div>

                    </div>
                
                    <div class="form-row">
                    
                        <!-- FINAL X -->
                        <div class="form-group col-md-6">
                        
                            <label for="finalx">Final x</label>
                            
                            <input type="text" class="form-control" step="any" name="finalx" min="0" placeholder="0" required> 
                        
                            
                        
                        </div>
                    
                        <!-- FINAL Y -->
                        <div class="form-group col-md-6">
                        
                            <label for="finaly">Final Y</label>
                        
                            <input type="text" class="form-control" step="any" name="finaly" min"0" placeholder="0">
                        
                        </div>
                    
                    </div>

                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                        
                            <label for="cabenx">Caben X</label>
                        
                            <input type="text" class="form-control" step="any" name="cabenx" min"0" placeholder="0">
                        
                        </div>
                    
                        <div class="form-group col-md-6">
                        
                            <label for="cabeny">Caben Y</label>
                        
                            <input type="text" class="form-control" step="any" name="cabeny" min"0" placeholder="0">
                        
                        </div>
                    
                    </div>
                
                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                        
                            <label for="GapIntx">GapIntx</label>

                            <input type="text" class="form-control" step="any" name="GapIntx" min="0" placeholder="0" required>        
                        
                        </div>
                    
                        <div class="form-group col-md-6">
                        
                            <label for="GapInty"> Gap int(GapInty)</label>

                            <input type="text" class="form-control" step="any" name="GapInty" min="0" placeholder="0" required>        
                        
                        </div>
                    
                    </div>
                
                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                        
                            <label for="NoGapsx">No Gaps(NoGapsx)</label>

                            <input type="text" class="form-control" step="any" name="NoGapsx" min="0" placeholder="0" required>        
                        
                        </div>
                    
                        <div class="form-group col-md-6">
                        
                            <label for="NoGapsy"> No Gaps(NoGapsy)</label>

                            <input type="text" class="form-control" step="any" name="NoGapsy" min="0" placeholder="0" required>        
                        
                        </div>
                    
                    </div>
                
                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                        
                            <label for="GapExtx">X(GapExtx)</label>

                            <input type="text" class="form-control" step="any" name="GapExtx" min="0" placeholder="0" required>        
                        
                        </div>
                    
                        <div class="form-group col-md-6">
                        
                            <label for="GapExty"> Gap ext(GapExty)</label>

                            <input type="text" class="form-control" step="any" name="GapExty" min="0" placeholder="0" required>        
                        
                        </div>
                    
                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar dado</button>

        </div>

        </div>

		
		<?php
		
			$crearDado = new ControladorDados();
			$crearDado -> ctrCrearDado();
		
		?>

      </form>
      
    </div>

</div>

<!--=====================================
MODAL EDITAR DADO
======================================-->
<div id="modalEditarDado" class="modal fade" role="dialog">
  
    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#3c8dbc; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">Editar dado</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

                <div class="box-body">
              
                    <!-- NOMBRE -->
            
                    <div class="form-row">
                
                        <div class="form-group">
                    
                            <label for="nombre">Nombre</label>
                    
                            <input type="text" class="form-control" name="editarNombre" id="editarNombre" value="">
                             <input type="hidden" name="idDado" id="idDado" value="">
                    
                        </div>

                    </div>
                
                    <div class="form-row">
                    
                        <!-- FINAL X -->
                        <div class="form-group col-md-6">
                        
                            <label for="finalx">Final x</label>
                        
                            <input type="text" class="form-control" step="any" name="editarFinalx" id="editarFinalx" value="" min"0">
                        
                        </div>
                    
                        <!-- FINAL Y -->
                        <div class="form-group col-md-6">
                        
                            <label for="finaly">Final Y</label>
                        
                            <input type="number" class="form-control" step="any" name="editarFinaly" id="editarFinaly" value="" min"0">
                        
                        </div>
                    
                    </div>

                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                        
                            <label for="cabenx">Caben X</label>
                        
                            <input type="number" class="form-control" step="any" name="editarCabenx" id="editarCabenx" value="" min"0">
                        
                        </div>
                    
                        <div class="form-group col-md-6">
                        
                            <label for="cabeny">Caben Y</label>
                        
                            <input type="number" class="form-control" step="any" name="editarCabeny" id="editarCabeny" value="" min"0">
                        
                        </div>
                    
                    </div>
                
                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                        
                            <label for="GapIntx">GapIntx</label>

                            <input type="number" class="form-control" step="any" name="editarGapIntx" id="editarGapIntx" value="" min="0" >        
                        
                        </div>
                    
                        <div class="form-group col-md-6">
                        
                            <label for="GapInty"> Gap int(GapInty)</label>

                            <input type="number" class="form-control" step="any" name="editarGapInty" id="editarGapInty" value="" min="0" >        
                        
                        </div>
                    
                    </div>
                
                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                        
                            <label for="NoGapsx">No Gaps(NoGapsx)</label>

                            <input type="number" class="form-control" step="any" name="editarNoGapsx" id="editarNoGapsx" value="" min="0" >        
                        
                        </div>
                    
                        <div class="form-group col-md-6">
                        
                            <label for="NoGapsy"> No Gaps(NoGapsy)</label>

                            <input type="number" class="form-control" step="any" name="editarNoGapsy" id="editarNoGapsy" value="" min="0" >        
                        
                        </div>
                    
                    </div>
                
                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                        
                            <label for="GapExtx">X(GapExtx)</label>

                            <input type="number" class="form-control" step="any" name="editarGapExtx" id="editarGapExtx" value="" min="0" >        
                        
                        </div>
                    
                        <div class="form-group col-md-6">
                        
                            <label for="GapExty"> Gap ext(GapExty)</label>

                            <input type="number" class="form-control" step="any" name="editarGapExty" id="editarGapExty" value="" min="0" >        
                        
                        </div>
                    
                    </div>
        
                </div>

            </div>
            
            
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar dado</button>

        </div>

        </div>

		
		<?php
		
			$editarDado = new ControladorDados();
			$editarDado -> ctrEditarDado();
		
		?>

      </form>
      
    </div>

</div>

<?php

  $borrarDado = new ControladorDados();
  $borrarDado -> ctrBorrarDado();

?>
