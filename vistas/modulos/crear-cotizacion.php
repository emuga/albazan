<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Cotizaciones
    
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Crear Cotizaciones</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="row">

      <div class="col-lg-4 col-xs-12">

        <div class="box box-success">

          
              
            <div class="box-header with-border"></div>

              <div class="box-body">

                <div class="box">

                  <div class="form-group row">

                    <div class="col-lg-6">
                  
                      <!--=====================================
                      # COTIZACION
                      ======================================-->
                      <div class="input-group">
                      
                        <label for="">No Cotizaci&oacute;n</label>

                        <input type="text" class="form-control" name="noCotizacion" placeholder="CT013">

                      </div>

                    </div> 

                    <!--=====================================
                    # FECHA
                    ======================================-->
                    <div class="col-lg-6">

                      <div class="input-group">
                    
                        <label for="">Fecha</label>

                        <input type="date" class="form-control" name="fecha">

                      </div>
              
                    </div>

                  </div>

                  <!--=====================================
                    # CLIENTE
                  ======================================-->
                  <div class="input-group row">

                    <div class="col-lg-12">

                      <div class="input-group">
                      
                        <label for="">Cliente</label>

                        <select name="clientes" id="clientes" class="form-control">
                          
                          <option value="">Seleccionar cliente</option>

                          <?php

                          $item = null;
                          $valor = null;

                          $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

                          foreach ($clientes as $key => $value){

                            echo '<option value="'.$value["id"].'">'.$value["nombre_empresa"].'</option>';

                          }

                          ?>

                        </select>

                      </div>

                      <br>

                      <!--=====================================
                      # PRODUCTO
                      ======================================-->
                      <div class="input-group">
                          
                        <label for="">Producto</label>

                        <select name="producto" id="producto" class="form-control">
                              
                          <option value="">Seleccionar Productos</option>
                          
                          <?php

                          $item = null;
                          $valor = null;

                          $productos = ControladorProductos::ctrMostrarProductos($item, $valor);

                          foreach($productos as $key => $value){

                          echo '<option value="'.$value["id"].'">'.$value["descripcion"].'</option>';

                          }

                          ?>

                        </select>

                      </div>

                    </div>

                  </div>

                  <br>

                  <div class="input-group row">
                    <!--=====================================
                        # UNIDAD
                        ======================================-->
                    <div class="col-lg-4">
                      
                      <!-- <div class="input-group"> -->
                          
                        <label for="">Unidad</label>

                          <select name="unidad" class="form-control" id="">

                            <option>Pulgadas</option>

                          </select>

                      <!-- </div> -->

                    </div> 

                    <!--=====================================
                    # CANTIDAD
                    ======================================-->
                    <div class="col-lg-4">

                      <!-- <div class="input-group"> -->
                        
                        <label for="">Cantidad</label>

                        <input type="number" class="form-control" step="deny" id="cantidad" value="500" name="cantidad">

                      <!-- </div> -->
                  
                    </div>

                    <!--=====================================
                      # COLOR
                      ======================================-->
                    <div class="col-lg-4">

                      <!-- <div class="input-group"> -->
                        
                        <label for="">Color</label>

                        <select name="color" class="form-control" id="">

                          <option value="Blanco">1 Tinta</option>
                          <option value="Blanco">2 Tintas</option>
                          <option value="Blanco">3 Tintas</option>
                          <option value="Blanco">Full Color</option>

                        </select>

                      <!-- </div> -->
                  
                    </div>

                  </div>

                  <fieldset>
                  
                    <legend>Tama&ntilde;o final</legend>

                     <div class="col-lg-4">
                        
                          <!--=====================================
                          # ANCHO
                          ======================================-->
                      <div class="input-group">
                            
                        <label for="">Ancho</label>

                        <input type="number" class="form-control" min="0" id="anchoFinal" name="anchoFinal">

                      </div>

                    </div> 
                    
                    <!--=====================================
                          # SWAP VALORES
                          ======================================-->
                    <div class="col-lg-4">

                      <label for="">Swap Values</label>

                      <div class="input-group">
                          
                        
                        <input type="image" img src="vistas/img/swap.png" height="25" width="60" id="go" onclick="swapValues()" value="Swap"/>
                        

                      </div>
                    
                    </div>

                          <!--=====================================
                          # ALTO
                          ======================================-->
                    <div class="col-lg-4">

                      <div class="input-group">
                          
                        <label for="">Alto</label>

                          <input type="number" class="form-control" min="0" id="altoFinal" name="altoFinal">

                      </div>
                    
                    </div>

                        

                  </fieldset>

                </div>

                <label for="">Servicios extras</label>
                <div class="form-group row">

                    <div class="col-lg-6">
                  
                      <!--=====================================
                      # LAMINADO
                      ======================================-->
                      <div class="input-group">

                        <input type="checkbox" class="form-check-input" name="laminado">

                        <label for="">Laminado</label>

                      </div>

                    </div> 

                    <!--=====================================
                    # SUAJE
                    ======================================-->
                    <div class="col-lg-6">

                      <div class="form-group">
                    
                        

                        <label for="" class="">

                          <input type="checkbox" class="minimal" name="suaje">
                          Suaje

                        </label>

                      </div>
              
                    </div>

                  </div>

                  <div class="form-group row">

                    <div class="col-lg-6">
                  
                      <!--=====================================
                      # LAMINADO
                      ======================================-->
                      <div class="input-group">

                        <label for="">Papel utilizar</label>

                      </div>

                    </div> 

                    <!--=====================================
                    # SUAJE
                    ======================================-->
                    <div class="col-lg-6">

                      <div class="input-group">
                    
                        <select name="papelUtilizar" class="form-control" id="">
                          
                          <option value="">Seleccionar papel utilizar</option>
                          
                          <?php

                          $item = null;
                          $valor = null;

                          $papelUtilizar = ControladorPapeles::ctrMostrarPapeles($item, $valor);
                          
                          foreach($papelUtilizar as $key => $value){

                            echo '<option value="'.$value["id"].'">'.$value["papel"].'</option>';

                          }



                          ?>

                        </select>

                      </div>
              
                    </div>

                  </div>

                  <label for="">Tama&ntilde;o Del Extendido</label>
                <div class="form-group row">

                    <div class="col-lg-3">
                  
                      <!--=====================================
                      # ANCHO
                      ======================================-->
                      <div class="input-group">

                        <label for="">Ancho</label>

                        <input type="text" class="form-control" value="11" id="anchoExtendido" readonly="" placeholder="11">

                      </div>
                      
                    </div>

                    <div class="col-lg-2">
                        
                      <div class="input-group">
                        
                        <label>in</label>

                      </div>

                    </div>

                    <div class="col-lg-2">
                        
                      <div class="input-group">
                        
                        <label>X</label>

                      </div>

                    </div>

                    <!--=====================================
                    # ALTO
                    ======================================-->
                    <div class="col-lg-3">

                      <div class="form-group">
                    
                        <label for="" class="">Alto</label>

                          <input type="text" class="form-control" value="17" id="altoExtendido" readonly="" placeholder="17">
                    
                      </div>
              
                    </div>

                    <div class="col-lg-2">
                        
                      <div class="input-group">
                        
                        <label>in</label>

                      </div>

                    </div>

                  </div>

              </div>

        </div>
        <!-- Fin Row -->     

      </div>
      <!-- Fin box-body -->

      <div class="col-lg-4 col-xs-12">

        <div class="box box-success">

          <form method="post">
              
            <div class="box-header with-border">

              <div class="box-body">

                <div class="box" >

                  <div class="input-group row">
                    
                    <div class="col-lg-12">
                      
                      <label for="">Costos</label>

                    </div>

                  </div>

                  <div class="form-group row">

                    <div class="col-lg-6">
                      
                      <!--=====================================
                      # OFFSET
                      ======================================-->
                      <div class="input-group">
                      
                        <input type="checkbox" class="form-check-input" name="offset"> Offset

                      </div>

                    </div> 

                    <!--=====================================
                    # DIGITAL
                    ======================================-->
                    <div class="col-lg-6">

                      <div class="input-group">

                        <input type="checkbox" class="form-check-input" name="digital"> Digital

                      </div>
              
                    </div>

                  </div>

                  <br>

                  <div class="input-group row">
                    <!--=====================================
                        # NEGATIVO
                        ======================================-->
                    <div class="col-lg-4">
                      
                      <!-- <div class="input-group"> -->
                          
                        <label for="">Negativo</label>

                        <input type="number" class="form-control" step="deny" placeholder="350.00" id="negativo" name="negativo">

                      <!-- </div> -->

                    </div> 

                    <!--=====================================
                    # PLACA
                    ======================================-->
                    <div class="col-lg-4">

                      <!-- <div class="input-group"> -->
                        
                        <label for="">Placa</label>

                        <input type="number" class="form-control" step="deny" id="placa" name="placa" placeholder="400.00">

                      <!-- </div> -->
                  
                    </div>

                    <!--=====================================
                      # HORAS
                      ======================================-->
                    <div class="col-lg-4">

                      <!-- <div class="input-group"> -->
                        
                        <label for="">Horas/H</label>

                        <input type="number" class="form-control" step="deny" id="horas" name="horas" placeholder="850.00">

                      <!-- </div> -->
                  
                    </div>

                  </div>

                <div class="input-group row">

                  <div class="col-lg-4">
                        
                    <!--=====================================
                    # PAPEL
                    ======================================-->
                  
                    <label for="">Costo Hoja</label>

                    <select name="costoHoja" id="costoHoja" class="form-control">

                      <option value="0.25">0.25</option>
                      <option value="1.6">1.6</option>
                      <option value="1">1</option>
                      <option value="0.59">0.59</option>
                      <option value="1">1</option>

                    </select>

                  </div> 

                  <div class="col-lg-4">
                        
                    <!--=====================================
                    # PAPEL
                    ======================================-->
                  
                    <label for="">Total Costo Hoja</label>

                    <input type="number" class="form-control" id="totalCostoHoja" name="totalCostoHoja" readonly>

                  </div> 

                  <!--=====================================
                  # TINTA
                  ======================================-->
                  <div class="col-lg-4">
                          
                    <label for="">Costo tinta hoja</label>

                    <select name="costoTintaHoja" id="costoTintaHoja" class="form-control">

                      <option value="0.34">0.34</option>
                      <option value="12">12</option>
                      <option value="0.05">0.05</option>
                      <option value="1">1</option>

                    </select>
                    
                  </div>

                  <div class="col-lg-4">
                          
                    <label for="">Total costo Tinta hoja</label>

                    <input type="number" class="form-control" min="0" id="totalCosTinHoja" name="totalCosTinHoja" readonly>
                    
                  </div>

                  <!--=====================================
                  # DISENO
                  ======================================-->
                  <div class="col-lg-4">

                    <div class="input-group">
                          
                      <label for="">Dise&ntilde;o</label>

                      <input type="number" class="form-control" id="diseno" name="diseno" placeholder="0" step="deny">

                    </div>
                    
                  </div>

                </div>

                <div class="input-group row">

                  <div class="col-lg-4">
                        
                    <!--=====================================
                    # PIEZA POR EXTENDIDO
                    ======================================-->
                  
                    <label for="">Pieza por extendido</label>

                    <input type="number" class="form-control" min="0" id = "piezaPorExtendido"name="piezaPorExtendido" readonly>

                  </div> 

                  <!--=====================================
                  # EXTENDIDOS NECESARIOS
                  ======================================-->
                  <div class="col-lg-4">
                          
                    <label for="">Extendidos necesarios</label>

                    <input type="number" class="form-control" min="0"id = "extendidosNecesarios" name="extendidosNecesarios" readonly>
                    
                  </div>

                  <div class="col-lg-4">
                        
                    <!--=====================================
                    # BOTON CALCULAR
                    ======================================-->
                  
                    <button type="button" class="btn btn-group" onclick="operar()">Calcular</button>

                  </div>

                  <!-- variable p x ex -->
                <input type="hidden" id="cabenh">

                <!-- variable horizontales -->
                <input type="hidden" id="hor">

                <!-- variable espacio usado vertical -->
                <input type="hidden" id="cabenv">

                <!-- variable vertical -->
                <input type="hidden" id="ver">

                <!-- variable Tot p -->
                <input type="hidden" id="sobra">

                <!-- variable sobra -->
                <input type="hidden" id="volth">

                <!-- variable costo total -->
                <input type="hidden" id="voltv">

                <hr>


                </div>

                <div class="input-group row">

                <!--=====================================
                  CALCULAR PIEZAS EXTENDIDAS
                  ======================================-->

                  <!-- <div class="col-xs-3" style="padding-right:0px">
                
                      <div class="input-group">

                        <label for="" style="color: green">Piezas por extendido</label>
                        <input type="number" class="form-control" id="pzas" placeholder="0" readonly>

                      </div>

                  </div> -->

                    <!--=====================================
                    EXTENDIDOS NECESARIOS
                    ======================================-->
                   <!-- <div class="col-xs-3" style="padding-right:0px">
                
                      <div class="input-group">

                        <label for="">Extendidos necesarios</label>
                        <input type="number" class="form-control" id="ext" placeholder="0" readonly>

                      </div>

                    </div> -->


                  <div class="col-lg-4">
                        
                    <!--=====================================
                    # TOTAL PIEZAS
                    ======================================-->
                  
                    <label for="">Total piezas</label>

                    <input type="number" class="form-control" min="0" id = "totalPiezas"name="totalPiezas">

                  </div> 

                  <!--=====================================
                  # SOBRANTES
                  ======================================-->
                  <div class="col-lg-4">
                          
                    <label for="">Sobrantes</label>

                    <input type="number" class="form-control" min="0" id = "sobrantes"name="sobrantes">
                    
                  </div>

                </div>

              </div>

              <div class="form-group">
                    
                <div class="col-lg-6">
                      
                  <label for="">Costo Total</label>

                </div>

                <div class="col-lg-6">
                        
                  <input type="number" class="form-control" id="costoTotal" name="costoTotal" placeholder="173.60" step="deny" readonly>

                </div>

              </div><br>

              <div class="form-group">
                    
                <div class="col-lg-6">
                      
                  <label for="">Valor incrementado</label>

                </div>

                <div class="col-lg-6">
                        
                  <input type="number" class="form-control" id="valorIncrementado" name="valorIncrementado" placeholder="1.95" step="deny">

                </div>

              </div><br>

              <div class="form-group">
                    
                <div class="col-lg-6">
                      
                  <label for="">Precio al publico</label>

                </div>

                <div class="col-lg-6">

                  <input type="number" class="form-control" name="precioPublico" id="precioPublico" placeholder="3,390.27" value="25" step="deny" readonly>
                  
                </div>

              </div><br>

              <div class="form-group">
                    
                <div class="col-lg-6" >
                      
                  <label for="">Ganancia</label>

                </div>

                <div class="col-lg-6" >
                        
                  <input type="number" class="form-control" id="ganancia" name="ganancia" placeholder="1,651.67" step="deny" readonly>

                </div>

              </div><br>

              <div class="form-group">
                    
                <div class="col-lg-6" >
                      
                  <label for="">Precio por pieza</label>

                </div>

                <div class="col-lg-6" >
                        
                  <input type="number" class="form-control" id="precioPorPieza" name="precioPorPieza" placeholder="3.39" step="deny" readonly>

                  <button type="button" class="btn btn-success" id="agregar" onclick="add(this.id)"> Agregar > > </button>

                </div>

              </div>

            </div>

            </div>

          </form>

        </div>
        <!-- Fin Row -->     

      </div>
      <!-- Fin box-body -->

      <div class="col-lg-4 col-xs-12" >

        <div class="box box-success" style="border: 1px solid grey;">

          <form method="post">
              
            <div class="box-header with-border"></div>

              <div class="box-body">

                <div class="box">

                  <div class="form-group row">

                    <div class="col-lg-3">
                  
                      <!--=====================================
                      # CANTIDAD
                      ======================================-->
                      <div class="input-group">
                      
                        <label for="">Cantidad</label>

                      </div>

                    </div> 

                    <!--=====================================
                    # DESCRIPCION
                    ======================================-->
                    <div class="col-lg-3">

                      <div class="input-group">
                    
                        <label for="">Descripcion</label>

                      </div>
              
                    </div>

                    <!--=====================================
                    # TAMANO
                    ======================================-->
                    <div class="col-lg-3">

                      <div class="input-group">
                    
                        <label for="">Tama&ntilde;o</label>

                      </div>
              
                    </div>

                    <!--=====================================
                    # PRECIO
                    ======================================-->
                    <div class="col-lg-3">

                      <div class="input-group">
                    
                        <label for="">Precio</label>

                      </div>
              
                    </div>

                  </div>

                  <div class="rows nuevaCotizacion">

                  

                </div>

                <input type="hidden" id="listaProductos" name="listaProducto">

              </div>

          </form>

        </div>
        <!-- Fin Row -->     

      </div>
      <!-- Fin box-body -->

    </div>
    <!-- Fin box -->
  
  </section>
  
</div>

<script type="text/javascript">
  function operar() {

// ==================================================================================================
// =           SE DECLARAN VARIABLES PARA FINAL HORIZONTAL, EXTENDIDO HORIZONTAL Y SOBRAS           =
// ==================================================================================================
  var fh = Number(document.getElementById("anchoFinal").value);
 // console.log("fh", fh);

  var eh = Number(document.getElementById("anchoExtendido").value);
 // console.log("eh", eh);

 sobra = 0;


// ==================================================================================================
// = OPERACION PARA SACAR CUANTAS CABEN HORIZONTALMENTE:
//EXTENDIDO HORIZONTAL ENTRE FINAL HORIZONTAL           =
// ==================================================================================================
  var cabenh = eh / fh;
 // console.log("cabenh", cabenh);

// ==================================================================================================
// = OPERACION PARA SACAR EXTENDIDO HORIZONTAL - CUANTAS CABEN HORIZONTAL * FINAL HORIZONTAL           =
// ==================================================================================================    
  document.getElementById("cabenh").value = eh - (Math.floor(cabenh) * fh);
  console.log("anchoExtendido", eh);

// ==================================================================================================
// = ESTA VARIABLE GUARDA EL RESULTADO DE LA OPERACION ANTERIOR PARA USARSE EN EL IF DE ABAJO           =
// ==================================================================================================
  var cabenhh = eh - (Math.floor(cabenh) * fh);
 // console.log("cabenhh", cabenhh);

// ==================================================================================================
// = SE DECLARAN VARIABLES PARA FINAL VERTICAL Y EXTENDIDO VERTICAL       =
// ==================================================================================================
var fv = Number (document.getElementById("altoFinal").value);
console.log("fv", fv);
var ev = Number (document.getElementById("altoExtendido").value);
console.log("ev", ev);

// ==================================================================================================
// = SE DECLARAN VARIABLES PARA FINAL VERTICAL Y EXTENDIDO VERTICAL       =
// ==================================================================================================
var cabenv = ev / fv;
console.log("cabenv", cabenv);
document.getElementById("cabenv").value = (Math.floor(cabenv) * fv);

// ==================================================================================================
// =    OPERACIONES PARA SACAR HORIZONTALES: EXTENDIDO HORIZONTAL * FINAL HORIZONTAL       =
// ==================================================================================================
var hor = (Math.floor(cabenh)) * (Math.floor(cabenv));
document.getElementById("hor").value = hor;

// ==================================================================================================
// = ESTE IF ES PARA VER CUANTAS SOBRAN VERTICALMENTE, SI EL NUMERO DE CABEN ES MENOR AL DE FINAL HORIZONTA ENTONCES
//   TENDRA UN VALOR DE 0       =
// ==================================================================================================
if (cabenhh < fv) {

    document.getElementById("sobra").value = sobra;

}else{

    document.getElementById("sobra").value = ev;

}

// ==================================================================================================
// = SE DECLARA LA VARIABLE VOLTEAR HORIZONTAL, DONDE DIVIDE LO QUE CABE HORIZONTAL ENTRE EL NUMERO FINAL VERTICAL =
// ==================================================================================================
var volth = cabenhh / fv;
console.log("volth", volth);

document.getElementById("volth").value = (Math.floor(volth));

// ==================================================================================================
// = SE DECLARA LA VARIABLE VOLTEAR VERTICAL, EN ELLA SE DIVIDE LO QUE SE TIENE EN LA CAJA DE TEXTO
//   DEL IF ENTRE EL NUMERO DE FINAL HORIZONTAL       =
// ==================================================================================================
var voltv = Number (document.getElementById("sobra").value) / fh;

document.getElementById("voltv").value = (Math.floor(voltv));

// ==================================================================================================
// = SE DECLARA LA VARIABLE VERTICAL Y SE HACEN LAS OPERACIONES PARA SACAR VERTICALES: VOLTEAR VERTICAL * VOLTEAR HORIZONTAL       =
// ==================================================================================================
var ver = (Math.floor(voltv)) * (Math.floor(volth));
console.log("ver", ver);

document.getElementById("ver").value = ver;

// ==================================================================================================
// = SE DECLARA LA VARIABLE PIEZAS Y SE HACEN LAS OPERACIONES PARA SACAR LAS PIEZAS EXTENDIDAS:
//    HORIZONTALES + VERTICALES       =
// ==================================================================================================
var pzas = hor + ver;

console.log("pzas", pzas);

 document.getElementById("piezaPorExtendido").value = pzas;

// ==================================================================================================
// = SE DECLARA LA VARIABLE CANTIDAD Y LA DE EXTENDIDOS, EN ESTA ULTIMA LAS OPERACIONES PARA SACAR
//   LOS EXTENDIDOS NECESARIOS: SE DIVIDE LA CANTIDAD ENTRE LAS PIEZAS POR EXTENDIDO =
// ==================================================================================================
var cant = Number (document.getElementById("cantidad").value);
console.log("cantidad", cant);

var ext = cant / pzas;
console.log("extendidosNecesarios", ext);

document.getElementById("extendidosNecesarios").value = (Math.ceil(ext));

// ==================================================================================================
// = SE DECLARA LA VARIABLE TOTAL Y  SE HACEN LAS OPERACIONES PARA SACAR EL TOTAL: SE MULTIPLICAN LAS PIEZAS POR EXTENDIDO
//    * LOS EXTENDIDOS NECESARIOS=
// ==================================================================================================
var tot = pzas * (Math.ceil(ext));

document.getElementById("totalPiezas").value = tot;

// ==================================================================================================
// = SE DECLARA LA VARIABLE SOBRANTES Y SE HACEN LAS OPERACIONES PARA SACAR LOS SOBRANTES: SE RESTA EL TOTAL - CANTIDAD =
// ==================================================================================================
var sobras = tot - cant;

document.getElementById("sobrantes").value = sobras;

// CALCULAR COSTOHO * EXTENDIDO NECESARIO

var costoHoja = Number(document.getElementById("costoHoja").value);
console.log("costoHoja", costoHoja);

var extNec = Number(document.getElementById("extendidosNecesarios").value);
console.log("extNec", extNec);

var resultadoCostoHoja = costoHoja * extNec;
console.log("resultadoCostoHoja", resultadoCostoHoja);

document.getElementById("totalCostoHoja").value = resultadoCostoHoja;

// CALCULAR COSTOTINTAHOJA * PIEZASPOREXTENDIDOS

var costoTintaHoja = document.getElementById("costoTintaHoja").value;
console.log("costoTintaHoja", costoTintaHoja);

document.getElementById("totalCosTinHoja").value = costoTintaHoja * extNec;
console.log("totalCosTinHoja", costoTintaHoja);


var negativo = Number(document.getElementById("negativo").value);
console.log("negativo", negativo);
var diseno = Number(document.getElementById("diseno").value);
console.log("diseno", diseno);
var placa = Number(document.getElementById("placa").value);
console.log("placa", placa);
var horas = Number(document.getElementById("horas").value);
console.log("horas", horas);

var resultadoCostoTotal = negativo + placa + horas + diseno + resultadoCostoHoja;
console.log("resultadoCostoTotal", resultadoCostoTotal);
document.getElementById("costoTotal").value = resultadoCostoTotal;

var resultadoValorIncrementado = Number (document.getElementById("valorIncrementado").value);
console.log("valorIncrementado", resultadoValorIncrementado);

var resultadoPrecioPublico = resultadoCostoTotal * resultadoValorIncrementado;
console.log("resultadoPrecioPublico", resultadoPrecioPublico);
document.getElementById("precioPublico").value = resultadoPrecioPublico;

document.getElementById("ganancia").value = resultadoPrecioPublico - resultadoCostoTotal;

document.getElementById("precioPorPieza").value = resultadoPrecioPublico / cant;
}

// function pruebas(){

//   alert("Este boton es de prueba, no borrar");
// }
  function add(){

    const cotizacionCantidad = $("#cantidad").val();
    const cotizacionProducto = $("#producto").val();
    const cotizacionTamano = $("#anchoFinal").val() + "x" + $("#altoFinal").val();
    const cotizacionPrecioPublico = $("#precioPublico").val();

    const html = `<div class="form-group row">

                      <div class="col-lg-3">

                        <div class="input-group">

                          <label for="" value="'{cotizacionCantidad}'">${cotizacionCantidad}</label>

                        </div>

                      </div>

                      <div class="col-lg-3">

                        <div class="input-group">

                          <label for="" value="{cotizacionProducto}">${cotizacionProducto}</label>

                        </div>

                      </div>

                      <div class="col-lg-3">

                        <div class="input-group">

                          <label for="" value="{cotizacionTamano}">${cotizacionTamano}</label>

                        </div>

                      </div>

                      <div class="col-lg-3">

                        <div class="input-group">

                          <label for="" value="{cotizacionPrecioPublico}">$${cotizacionPrecioPublico}</label>

                        </div>

                      </div>

                    </div>`;
    $(".rows").append(html);

    listarProducto();

  }

/*=============================================
LISTAR TODOS LOS PRODUCTOS
=============================================*/
function listarProducto(){

  const listaProductos = [];

  const cantidad =  $("#cantidad");

  const producto = $("#producto");

  const tamano = $("#tamano");

  const precioPublico = $("#precioPublico");

  for (var i = 0; i < producto.length; i++){

    listaProductos.push({"cantidad" : $(cantidad[i]).val(),
                        "producto" : $(producto[i]).val(),
                        "tamano" : $(tamano[i]).val(),
                        "precioPublico" : $(precioPublico[i]).val()})

    //console.log("listaProductos", listaProductos);

  }

  $("#listaProductos").val(JSON.stringify(listaProductos));

  //console.log("listarProducto", listaProducto);


}

/*=============================================
OPERACIONES PARA CALCULAR PIEZAS POR EXTENDIDO, EXTENDIDOS NECESARIOS
, TOTAL PIEZAS Y SOBRANTES
=============================================*/
function swapValues() {
  var tmp = document.getElementById("anchoFinal").value;
  document.getElementById("anchoFinal").value = document.getElementById("altoFinal").value;
  document.getElementById("altoFinal").value = tmp;
}



</script>

