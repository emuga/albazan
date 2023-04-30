<?php

  include_once("conexionDados.php");

?>


    <script type="text/javascript">
      
   

    </script>
  <link href="Css/style.css" rel="stylesheet" type="text/css">
  
<div class="content-wrapper">
        
    <section class="content">
            
        <div class="box-body">
            
            <div class="form-row">
                
                <div class="form-group">
                    
                    <label> Cotizacion</label> <input type="text"  />
                    <label style="margin-left:10px;">Fecha</label>
                    <input type="date" id="start" name="trip-start"
                           value="2023-04-01"
                           min="2023-01-01" max="2050-12-31">
                    <label style="margin-left:10px;"> Tipo de Cambio </label><input style=" width:60px;margin-left:10px;" type="text" id="TipoCambio"/>
                    <label style="margin-left:10px;"> Valor agregado </label><input style=" width:60px;margin-left:10px;" type="text" id="ValorAgregado"/>
        
                    <br>
                    <label style="margin-left:10px;"> Nombre del Cliente </label>
                    
                    <select  style=" width:300px;height:40px;margin-left:10px;" name="tipoTinta"  class="select-cliente">
                        
                        <option value="0">Seleccione un cliente</option>
                        <option value="0.02318">01</option>
                        <option value="0.03416">02</option>
                        <option value="0.3087">03</option>
                        
                    </select>
                    <br><br>
                    
                    <label> Cantidad</label> <input style=" width:80px;margin-left:10px;" type="text" id="cant" />
                    <label> Num. de Tintas</label> <input style=" width:60px;margin-left:10px;" type="text" id="NumTintas" oninput="sum()" />
                    <label>Tama単o de etiqueta</label>
                        
                    <select id="etiqueta">
                        
                        <option value="" selected="selected">Selecionar etiqueta</option>
                        
                            <?php
                            
                              $sql = "SELECT id, nombre, finalx, finaly, cabenx, cabeny, GapIntx, GapInty, NoGapsx, NoGapsy, GapExtx, GapExty FROM dados LIMIT 10";
                              $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                              while( $rows = mysqli_fetch_assoc($resultset) ) { 
                
                            ?>
                        
                        <option value="<?php echo $rows["id"]; ?>"><?php echo $rows["nombre"]; ?></option>
            
                        <?php }	?>
        
                    </select>
                        
                </div>
        
                <div id="display">
        
                    <div class="row" id="heading" style="display:"><br>
        
                        <h5>Resultados de la Base de Datos.</h5><br>
            
                        <table class="table table-bordered table-striped dt-responsive" width="100%">
            
                            <thead class="thead-dark">
                
                                <tr>
                                    
                                  <th scope="col">#</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Finalx</th>
                                  <th scope="col">Finaly</th>
                                  <th scope="col">Cabenx</th>
                                  <th scope="col">Cabeny</th>
                                  <th scope="col">GapIntx</th>
                                  <th scope="col">GapInty</th>
                                  <th scope="col">NumGapsx</th>
                                  <th scope="col">NumGapsy</th>
                                  <th scope="col">GapExtx</th>
                                  <th scope="col">GapExty</th>
                
                                </tr>
                
                            </thead>
                
                            <tbody>
                
                                <tr id="valores">
                
                                  <th scope="row">1</th>
                
                                    <td>
                
                                      <div class="col-sm-4" id="nombre"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="finalx"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="finaly"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="cabenx"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="cabeny"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="GapIntx"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="GapInty"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="NoGapsx"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="NoGapsy"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="GapExtx"></div>
                
                                    </td>
                                    <td>
                
                                      <div class="col-sm-4" id="GapExty"></div>
                
                                    </td>
                                </tr>
                
                            </tbody>
                
                        </table>
            
                                    
                        <input type="button" name="suma" value="calcular" onclick="operar()" /><br><br>
                        <!--<button name="suma" value="calcular2" onclick="operar()"></button>-->
            
                    </div>
        
                </div>
    
            </div>
    
            <div class="box-body" style="display:">
                    
              CALCULADO<br>
        
              <label class="camu">B(x)"bx"</label> 
              <input type="text" id="bx"  readonly style="width:75px;">
                    
              <label class="camu">A(y)"ay"</label> 
              <input type="text" id="ay" readonly style="width:75px;">
                    
              <label class="camu"> Setup</label> 
              <input type="text" id="setup" readonly style="width:75px;"/>
                    
              <label class="camu"> MSI</label> 
              <input type="text" id="msi" readonly style="width:75px;"/>
                    
            </div>
                
            <div class="row" id="tinta-row" style="display: none">        
                <label> Tipo de tinta</label><br />
        
                <div class="item row-item">
                    X(tipoTinta)
                    <select name="tipoTinta" id="select-tipoTinta" class="select-tipoTinta">
                        
                        <option value="0">Select</option>
                        <option value="0.02318">CMYK</option>
                        <option value="0.03416">Pantone</option>
                        <option value="0.3087">Fluorescente</option>
                        
                    </select>
            
                    <label>(cantidad)</label>
                    <input type="text" id="cantidad" style="width:75px;"/> Densidad
                    <select id="select-densidad" class="select-densidad">
                        
                        <option value="0">Select</option>
                        <option value="1">Baja</option>
                        <option value="2">Media</option>
                        <option value="3">Alta</option>
                      
                    </select>
            
                    tinta
                    <input type="text" id="valor_select1" style="width:75px;" readonly/>
                    
                    densidad
                    <input type="text" min="1" max="3" readonly id="valor_select2" style="width:75px;"/>
            
                    Dens valor
                    <input type="text" id="DensValor" readonly style="width:75px;"/>
            
                    Valor tinta
                    <input type="text" id="ValorTinta" readonly style="width:75px;"/>
            
                    Costo Tinta 
                    <input type="text" id="CostoTinta" readonly style="width:75px;"/>
                    
                    <input type="submit" value="x" style="background-color:red;color:white;">
                </div>
                
            </div>
                
            <div id="content"></div>
            
            <input type="hidden" id="rows-counter" value="0" />
            <br>
            <button  id="add-row-btn">Agregar Tinta</button>
            <br>
            <br>
            <p>Suma cantidad: <span id="sum-cantidad" oninput="sum()"></span></p>
            <p>Costo Total Tintas: <span id="sum-CostoTinta"></span></p>
            
            <div id="CalculosDos" style="display: none">    
        
                <p>
                    
                    <label> PLACA: Costo por pulgada (0.5368)</label>
                    <label> B</label> 
                    <input type="text" id="B" onclick="operar()" style="width:75px;" readonly/>
                
                    <label> A</label> 
                    <input type="text" id="A" style="width:75px;" readonly/>
                
                    <label> Area</label>
                    <input type="text" id="Area" style="width:75px;" readonly/>
                
                    <label> Costo placa dolares</label>
                    <input type="text" style="width:75px;" id="CostoPlacaDlls" readonly/>
                    
                </p>
            
                <p>
                    
                  <label> NEGATIVO: Costo total negativo</label>
                  <input type="text" id="CostoTotalNegativo" readonly/p>
            
                </p>
                    
                <label> REBOBINADO: Core</label>
                <select name="tipoCore" id="select-tipoCore" onchange="Rebobinado()">
                    
                    <option value="0">Select</option>
                    <option value="0.03782">3"</option>
                    <option value="0.1037">1.5"</option>
                    <option value="0.1037">1"</option>
                    
                </select>
                
                Costo Core
                <input type="text" id="CostoCore" readonly />
                Costo Total Core
                <input type="text" step="any" id="CostoTotalCore" style="width:75px;" readonly/>
            
                <p> 
    
                <label> LAMINADO:</label> 
                <!-- <input type="text" id="LaminadoCosto" /> -->
                
                <label> Costo Total Laminado</label> 
                <input type="text" id="LaminadoTotal" style="width:75px;"  readonly/>
                </p>
          
                <div  align="left">
                    
                    <label> Costo tinta pesos</label> 
                    <input type="text" id="CostoTintaPesos" style="width:75px;"readonly/>
                    <br>
                    
                    <label> Costo placa pesos</label> 
                    <input type="text" id="CostoPlacaPesos" style="width:75px;"readonly/>
                    <br>
                    
                    <label> Costo negativo pesos</label> 
                    <input type="text" id="CostoNegativoPesos" style="width:75px;"readonly/>
                    <br>
                    
                    <label> Costo rebobinado pesos</label> 
                    <input type="text" id="CostoRebobinadoPesos" style="width:75px;"readonly/>
                    <br>
                    
                    <label> Costo laminado pesos</label> 
                    <input type="text" id="CostoLaminadoPesos" style="width:75px;"readonly/>
                    <br>
                    
                    <label> Costo Total Pesos</label> 
                    <input type="text" id="CostoTotalPesos" style="width:75px;"readonly/>
                    <br>
                    
                    <label>  Total P. Publico</label> 
                    <input type="text" id="TotalPrecioPublico" class="widthset"style="width:75px;"readonly/>
                    <br>
                    
                </div>
                
            </div>
        </div>
    </section>
</div>   
    
